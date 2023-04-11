<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Product;
use App\Models\Robot;
use App\Models\User;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use QuickBooksOnline\API\Core\OAuth\OAuth2\OAuth2LoginHelper;
use QuickBooksOnline\API\DataService\DataService;
use Config;
use QuickBooksOnline\API\Core\ServiceContext;
use QuickBooksOnline\API\Facades\Invoice;
use QuickBooksOnline\API\Facades\Item;
use QuickBooksOnline\API\PlatformService\PlatformService;
use QuickBooksOnline\API\Core\Http\Serialization\XmlObjectSerializer;
use QuickBooksOnline\API\Facades\Customer;

class QuickBookController extends Controller
{
    public function gettingAccessToken()
    {

        $dataService = DataService::Configure(array(
            'auth_mode' => 'oauth2',
            'ClientID' => config('quickbooks.client_id'),
            'ClientSecret' => config('quickbooks.client_secret'),
            'RedirectURI' => config('quickbooks.oauth_redirect_uri'),
            'scope' => config('quickbooks.oauth_scope'),
            'baseUrl' => "development"
        ));

        $OAuth2LoginHelper = $dataService->getOAuth2LoginHelper();
        $authorizationCodeUrl = $OAuth2LoginHelper->getAuthorizationCodeURL();
     //  dd($authorizationCodeUrl);

        $oauth2LoginHelper = new OAuth2LoginHelper(config('quickbooks.client_id'),config('quickbooks.client_secret'));
      //  $accessTokenObj = $oauth2LoginHelper->refreshAccessTokenWithRefreshToken('AB11689331226di1YPDKFnlJk9bzsFy4l8GPvLyLNERx78whyF');
      //  $accessTokenValue = $accessTokenObj->getAccessToken();
      //  dd($accessTokenValue);
      //  $refreshTokenValue = $accessTokenObj->getRefreshToken();

        $accessTokenObj = $OAuth2LoginHelper->exchangeAuthorizationCodeForToken("AB11680605098litsA0ZXezTbpWEI6yGCu7r8fQdVrynUmKQsx", "4620816365272942040");
        $accessTokenValue = $accessTokenObj->getAccessToken();
        dd($accessTokenObj);
        $refreshTokenValue = $accessTokenObj->getRefreshToken();

        //If you want to use the access token and refresh token directly for your application, use:
        $dataService->updateOAuth2Token($accessTokenValue);
    }


    public function createCustomer(Request $request)
    {
        if (User::where('email', $request->email)->first() != null) {
            return back()->with('error', 'You are already registered with us. Please login or if you forgot password, please reset your password');
        } else

            $event = $request->session()->get('event');
            if ($event != null) {
                if ($event->otp != $request->otp) {
                    return back()->with('error', 'OTP invalid');
                } else {
                    $customerObj = Customer::create([
                        "BillAddr" => [
                            "Line1" => "Dubai Mall",
                            "City" => "Dubai",
                            "Country" => "Untited Arab Emirates",
                            "CountrySubDivisionCode" => "TW",
                            "PostalCode" => "40000"
                        ],
                        "Notes" => "Roboto for rentals.",
                        "FamilyName" => $event->name,
                        "Suffix" => "Jr",
                        "FullyQualifiedName" => $event->name,
                        "CompanyName" => $event->name,
                        "DisplayName" => $event->name,
                        "PrimaryPhone" => [
                            "FreeFormNumber" => $event->contact_number
                        ],
                        "PrimaryEmailAddr" => [
                            "Address" => $event->email
                        ]
                    ]);
                    $dataService = DataService::Configure(array(
                     'auth_mode' => 'oauth2',
                     'ClientID' => config('quickbooks.client_id'),
                     'ClientSecret' => config('quickbooks.client_secret'),
                     'accessTokenKey' => "eyJlbmMiOiJBMTI4Q0JDLUhTMjU2IiwiYWxnIjoiZGlyIn0..eXdSXOwXWYlCG5Es8dfveA.QEYEYVZ57TyKY2srDTY4h3iXkgajDk7uRvYHUwDQf1OK1XcZrH2mQv7dKA60i_3HyZOYVuSJx-BWn2xEv6ruRbyKaloINwQ8oqrK_qDWGYrPf1ANCXyS5znwKkj6fLFwoL8p0S7JlZ_vsry1VEwq_v7dIuSgpWiNHuAqhKANIPWULS-x79DXPTJeZCUOcnPlN2Cq9ce40dbjffI6u-xC0d2Kc5t9hQ8PGSm1iMmQdx6RlvLqhSS7_YShqq-yFjX05zXinl3zHX8GoABB8gfMk7ELOeDJkoJedO6zpLeBxlEcdH2fnfAh4w0bpbAe20hbrVuRHlnKJZDsZEdIf9Of-wzeTppP8fiSw5MdizCtvAN5qCwCs0AZ8u9255-kfyzDHQXSY9fiz3MNabYdCm5TO1Z1AgmssFU_1ajNZ_R0lSRmzwm41bwkyohw2BeyBrJFadflz-Ae33jnSIywPPYym_tNgr-JMiBukxEcHQHv37Ds03WS4iL3SQNSLblEn5M9vpGa4YTSV11_2EVV1KXUHKLBIrPw9uHI20_MPBsMun4vKMNOW8yoADg4hqIZGl_GMckx2-zWwPxpoeafNyklNYuq0lc79hp-lUC6Gs3yTIDExKWrqzxtdytN5fydfUDnUELe8QDgqiAwEHtgcRjfx5hTHfODhJJ-3d3WFh5-pLf7RoD-tCNLBuak8p3LSviJINabG6b4aLaT_VFU6zTaPFuYYeMfOXMw1bKoK0RESA81ZofXp_4wVtqiuQLPGL2U.Gma2POjUQyhDX11QBausCw",
                     'refreshTokenKey' => 'AB11685018345bIMipMvuOUrIy93UKkq5vGy07h9ceJBFTjyQC',
                     'QBORealmID' => "4620816365272942040",
                     'baseUrl' => "development"
                    ));
                    $resultingCustomerObj = $dataService->Add($customerObj);
                    $error = $dataService->getLastError();
                    if ($error) {
                        echo "The Status code is: " . $error->getHttpStatusCode() . "\n";
                        echo "The Helper message is: " . $error->getOAuthHelperError() . "\n";
                        echo "The Response message is: " . $error->getResponseBody() . "\n";
                    }
                       else
                    {

                        // dd($resultingCustomerObj);
                        $pass = Str::random(10);
                        $user = new User();
                        $user->name = $event->name;
                        $user->email = $event->email;
                        $user->customerRef = $resultingCustomerObj->Id;
                        $user->password = Hash::make($pass);
                        $user->save();

                        $e = new Event();
                        $e->event_name = $event->event_name;
                        $e->user_id = $user->id;
                        $e->robot_number = $event->robot_number;
                        $e->venue = $event->event_name;
                        $e->contact_person = $event->contact_person;
                        $e->contact_number = $event->contact_number;
                        $e->date_range = $event->date_range;
                        $e->robot_id = $event->robot_id;
                        $e->save();

                        $main_user = User::where('email', $event->email)->with('events')->first();
                        Auth::loginUsingId($user->id);

                        $request->session()->forget('event');
                        return redirect()->route('rentRobot.step.four.post');
                                          }
                                      }
                                   }
                                }


     public function getCustomers(){
        $dataService = DataService::Configure(array(
            'auth_mode' => 'oauth2',
            'ClientID' => config('quickbooks.client_id'),
            'ClientSecret' => config('quickbooks.client_secret'),
            'accessTokenKey' => "eyJlbmMiOiJBMTI4Q0JDLUhTMjU2IiwiYWxnIjoiZGlyIn0..eXdSXOwXWYlCG5Es8dfveA.QEYEYVZ57TyKY2srDTY4h3iXkgajDk7uRvYHUwDQf1OK1XcZrH2mQv7dKA60i_3HyZOYVuSJx-BWn2xEv6ruRbyKaloINwQ8oqrK_qDWGYrPf1ANCXyS5znwKkj6fLFwoL8p0S7JlZ_vsry1VEwq_v7dIuSgpWiNHuAqhKANIPWULS-x79DXPTJeZCUOcnPlN2Cq9ce40dbjffI6u-xC0d2Kc5t9hQ8PGSm1iMmQdx6RlvLqhSS7_YShqq-yFjX05zXinl3zHX8GoABB8gfMk7ELOeDJkoJedO6zpLeBxlEcdH2fnfAh4w0bpbAe20hbrVuRHlnKJZDsZEdIf9Of-wzeTppP8fiSw5MdizCtvAN5qCwCs0AZ8u9255-kfyzDHQXSY9fiz3MNabYdCm5TO1Z1AgmssFU_1ajNZ_R0lSRmzwm41bwkyohw2BeyBrJFadflz-Ae33jnSIywPPYym_tNgr-JMiBukxEcHQHv37Ds03WS4iL3SQNSLblEn5M9vpGa4YTSV11_2EVV1KXUHKLBIrPw9uHI20_MPBsMun4vKMNOW8yoADg4hqIZGl_GMckx2-zWwPxpoeafNyklNYuq0lc79hp-lUC6Gs3yTIDExKWrqzxtdytN5fydfUDnUELe8QDgqiAwEHtgcRjfx5hTHfODhJJ-3d3WFh5-pLf7RoD-tCNLBuak8p3LSviJINabG6b4aLaT_VFU6zTaPFuYYeMfOXMw1bKoK0RESA81ZofXp_4wVtqiuQLPGL2U.Gma2POjUQyhDX11QBausCw",
            'refreshTokenKey' => 'AB11685018345bIMipMvuOUrIy93UKkq5vGy07h9ceJBFTjyQC',
            'QBORealmID' => "4620816365272942040",
            'baseUrl' => "development"
        ));

        $entities = $dataService->Query("Select * FROM Customer");

        // $dataService->setLogLocation("/Users/hlu2/Desktop/newFolderForLog");
        $i = 0;
        while (1) {
            $allCustomers = $dataService->FindAll('Customer', $i, 500);

            $error = $dataService->getLastError();
            if ($error) {
                echo "The Status code is: " . $error->getHttpStatusCode() . "\n";
                echo "The Helper message is: " . $error->getOAuthHelperError() . "\n";
                echo "The Response message is: " . $error->getResponseBody() . "\n";
                exit();
            }
            if (!$allCustomers || (0 == count($allCustomers))) {
                break;
            }

            $title = 'All Customers';
            return view('pages.quickbooks.customers', compact('allCustomers', 'title'));
        }
    }

    public function getCustomer($id)
    {
        $dataService = DataService::Configure(array(
            'auth_mode' => 'oauth2',
            'ClientID' => config('quickbooks.client_id'),
            'ClientSecret' => config('quickbooks.client_secret'),
            'accessTokenKey' => "eyJlbmMiOiJBMTI4Q0JDLUhTMjU2IiwiYWxnIjoiZGlyIn0..eXdSXOwXWYlCG5Es8dfveA.QEYEYVZ57TyKY2srDTY4h3iXkgajDk7uRvYHUwDQf1OK1XcZrH2mQv7dKA60i_3HyZOYVuSJx-BWn2xEv6ruRbyKaloINwQ8oqrK_qDWGYrPf1ANCXyS5znwKkj6fLFwoL8p0S7JlZ_vsry1VEwq_v7dIuSgpWiNHuAqhKANIPWULS-x79DXPTJeZCUOcnPlN2Cq9ce40dbjffI6u-xC0d2Kc5t9hQ8PGSm1iMmQdx6RlvLqhSS7_YShqq-yFjX05zXinl3zHX8GoABB8gfMk7ELOeDJkoJedO6zpLeBxlEcdH2fnfAh4w0bpbAe20hbrVuRHlnKJZDsZEdIf9Of-wzeTppP8fiSw5MdizCtvAN5qCwCs0AZ8u9255-kfyzDHQXSY9fiz3MNabYdCm5TO1Z1AgmssFU_1ajNZ_R0lSRmzwm41bwkyohw2BeyBrJFadflz-Ae33jnSIywPPYym_tNgr-JMiBukxEcHQHv37Ds03WS4iL3SQNSLblEn5M9vpGa4YTSV11_2EVV1KXUHKLBIrPw9uHI20_MPBsMun4vKMNOW8yoADg4hqIZGl_GMckx2-zWwPxpoeafNyklNYuq0lc79hp-lUC6Gs3yTIDExKWrqzxtdytN5fydfUDnUELe8QDgqiAwEHtgcRjfx5hTHfODhJJ-3d3WFh5-pLf7RoD-tCNLBuak8p3LSviJINabG6b4aLaT_VFU6zTaPFuYYeMfOXMw1bKoK0RESA81ZofXp_4wVtqiuQLPGL2U.Gma2POjUQyhDX11QBausCw",
            'refreshTokenKey' => 'AB11685018345bIMipMvuOUrIy93UKkq5vGy07h9ceJBFTjyQC',
            'QBORealmID' => "4620816365272942040",
            'baseUrl' => "development"
        ));
        $customer = $dataService->Query("SELECT * FROM Customer where Id='$id'");
        dd($customer);
    }


    public function createProduct(Request $request){
        $dataService = DataService::Configure(array(
            'auth_mode' => 'oauth2',
            'ClientID' => config('quickbooks.client_id'),
            'ClientSecret' => config('quickbooks.client_secret'),
            'accessTokenKey' => "eyJlbmMiOiJBMTI4Q0JDLUhTMjU2IiwiYWxnIjoiZGlyIn0..eXdSXOwXWYlCG5Es8dfveA.QEYEYVZ57TyKY2srDTY4h3iXkgajDk7uRvYHUwDQf1OK1XcZrH2mQv7dKA60i_3HyZOYVuSJx-BWn2xEv6ruRbyKaloINwQ8oqrK_qDWGYrPf1ANCXyS5znwKkj6fLFwoL8p0S7JlZ_vsry1VEwq_v7dIuSgpWiNHuAqhKANIPWULS-x79DXPTJeZCUOcnPlN2Cq9ce40dbjffI6u-xC0d2Kc5t9hQ8PGSm1iMmQdx6RlvLqhSS7_YShqq-yFjX05zXinl3zHX8GoABB8gfMk7ELOeDJkoJedO6zpLeBxlEcdH2fnfAh4w0bpbAe20hbrVuRHlnKJZDsZEdIf9Of-wzeTppP8fiSw5MdizCtvAN5qCwCs0AZ8u9255-kfyzDHQXSY9fiz3MNabYdCm5TO1Z1AgmssFU_1ajNZ_R0lSRmzwm41bwkyohw2BeyBrJFadflz-Ae33jnSIywPPYym_tNgr-JMiBukxEcHQHv37Ds03WS4iL3SQNSLblEn5M9vpGa4YTSV11_2EVV1KXUHKLBIrPw9uHI20_MPBsMun4vKMNOW8yoADg4hqIZGl_GMckx2-zWwPxpoeafNyklNYuq0lc79hp-lUC6Gs3yTIDExKWrqzxtdytN5fydfUDnUELe8QDgqiAwEHtgcRjfx5hTHfODhJJ-3d3WFh5-pLf7RoD-tCNLBuak8p3LSviJINabG6b4aLaT_VFU6zTaPFuYYeMfOXMw1bKoK0RESA81ZofXp_4wVtqiuQLPGL2U.Gma2POjUQyhDX11QBausCw",
            'refreshTokenKey' => 'AB11685018345bIMipMvuOUrIy93UKkq5vGy07h9ceJBFTjyQC',
            'QBORealmID' => "4620816365272942040",
            'baseUrl' => "development"
        ));
        $dataService->setLogLocation("/Users/hlu2/Desktop/newFolderForLog");
        $dateTime = new \DateTime('NOW');
        $Item = Item::create([
            "Name" => $request->itemName,
            "Description" => $request->description,
            "Sku" => $request->sku,
            "Active" => true,
            "FullyQualifiedName" => $request->itemName,
            "Taxable" => true,
            "UnitPrice" => $request->unitPrice,
            "Type" => "Inventory",
            "IncomeAccountRef" => [
                "value" => 79,
                "name" => "Landscaping Services:Job Materials:Fountains and Garden Lighting"],
            "PurchaseDesc" => "This is the purchasing description.",
            "PurchaseCost" => $request->unitPrice,
            "ExpenseAccountRef" => [
                "value" => 80,
                "name" => "Cost of Goods Sold"
            ],
            "AssetAccountRef" => [
                "value" => 81,
                "name" => "Inventory Asset"
            ],

            "TrackQtyOnHand" => true,
            "QtyOnHand" => $request->robotQuantiy,
            "InvStartDate" => $dateTime
        ]);
        $resultingObj = $dataService->Add($Item);
        $error = $dataService->getLastError();
        if ($error) {
            return redirect()->back()->with('error', "The Status code is: " . $error->getHttpStatusCode() . "The Helper message is: " . $error->getOAuthHelperError() . "The Response message is: " . $error->getResponseBody());
        } else {
            $product = new Robot();
            $product->itemRef = $resultingObj->Id;
            $product->robot_name = $request->itemName;
            $product->currency = $request->currency;
            $product->robot_quantity = $request->robotQuantiy;
            $product->robot_rental_price = $request->unitPrice;
            $product->save();
            return redirect()->back()->with('success', 'Robot added successfully');
        }
    }


    public function createProductGet()
    {
        $dataService  = DataService::Configure(array(
            'auth_mode' => 'oauth2',
            'ClientID' => config('quickbooks.client_id'),
            'ClientSecret' => config('quickbooks.client_secret'),
            'accessTokenKey' => "eyJlbmMiOiJBMTI4Q0JDLUhTMjU2IiwiYWxnIjoiZGlyIn0..eXdSXOwXWYlCG5Es8dfveA.QEYEYVZ57TyKY2srDTY4h3iXkgajDk7uRvYHUwDQf1OK1XcZrH2mQv7dKA60i_3HyZOYVuSJx-BWn2xEv6ruRbyKaloINwQ8oqrK_qDWGYrPf1ANCXyS5znwKkj6fLFwoL8p0S7JlZ_vsry1VEwq_v7dIuSgpWiNHuAqhKANIPWULS-x79DXPTJeZCUOcnPlN2Cq9ce40dbjffI6u-xC0d2Kc5t9hQ8PGSm1iMmQdx6RlvLqhSS7_YShqq-yFjX05zXinl3zHX8GoABB8gfMk7ELOeDJkoJedO6zpLeBxlEcdH2fnfAh4w0bpbAe20hbrVuRHlnKJZDsZEdIf9Of-wzeTppP8fiSw5MdizCtvAN5qCwCs0AZ8u9255-kfyzDHQXSY9fiz3MNabYdCm5TO1Z1AgmssFU_1ajNZ_R0lSRmzwm41bwkyohw2BeyBrJFadflz-Ae33jnSIywPPYym_tNgr-JMiBukxEcHQHv37Ds03WS4iL3SQNSLblEn5M9vpGa4YTSV11_2EVV1KXUHKLBIrPw9uHI20_MPBsMun4vKMNOW8yoADg4hqIZGl_GMckx2-zWwPxpoeafNyklNYuq0lc79hp-lUC6Gs3yTIDExKWrqzxtdytN5fydfUDnUELe8QDgqiAwEHtgcRjfx5hTHfODhJJ-3d3WFh5-pLf7RoD-tCNLBuak8p3LSviJINabG6b4aLaT_VFU6zTaPFuYYeMfOXMw1bKoK0RESA81ZofXp_4wVtqiuQLPGL2U.Gma2POjUQyhDX11QBausCw",
            'refreshTokenKey' => 'AB11685018345bIMipMvuOUrIy93UKkq5vGy07h9ceJBFTjyQC',
            'QBORealmID' => "4620816365272942040",
            'baseUrl' => "development"
        ));
        $items = $dataService->Query("SELECT * FROM Item ");
        $title = 'All Items';
        return view('pages.quickbooks.products', compact('items', 'title'));
    }


    public function getProducts()
    {
        $dataService = DataService::Configure(array(
            'auth_mode' => 'oauth2',
            'ClientID' => config('quickbooks.client_id'),
            'ClientSecret' => config('quickbooks.client_secret'),
            'accessTokenKey' => "eyJlbmMiOiJBMTI4Q0JDLUhTMjU2IiwiYWxnIjoiZGlyIn0..eXdSXOwXWYlCG5Es8dfveA.QEYEYVZ57TyKY2srDTY4h3iXkgajDk7uRvYHUwDQf1OK1XcZrH2mQv7dKA60i_3HyZOYVuSJx-BWn2xEv6ruRbyKaloINwQ8oqrK_qDWGYrPf1ANCXyS5znwKkj6fLFwoL8p0S7JlZ_vsry1VEwq_v7dIuSgpWiNHuAqhKANIPWULS-x79DXPTJeZCUOcnPlN2Cq9ce40dbjffI6u-xC0d2Kc5t9hQ8PGSm1iMmQdx6RlvLqhSS7_YShqq-yFjX05zXinl3zHX8GoABB8gfMk7ELOeDJkoJedO6zpLeBxlEcdH2fnfAh4w0bpbAe20hbrVuRHlnKJZDsZEdIf9Of-wzeTppP8fiSw5MdizCtvAN5qCwCs0AZ8u9255-kfyzDHQXSY9fiz3MNabYdCm5TO1Z1AgmssFU_1ajNZ_R0lSRmzwm41bwkyohw2BeyBrJFadflz-Ae33jnSIywPPYym_tNgr-JMiBukxEcHQHv37Ds03WS4iL3SQNSLblEn5M9vpGa4YTSV11_2EVV1KXUHKLBIrPw9uHI20_MPBsMun4vKMNOW8yoADg4hqIZGl_GMckx2-zWwPxpoeafNyklNYuq0lc79hp-lUC6Gs3yTIDExKWrqzxtdytN5fydfUDnUELe8QDgqiAwEHtgcRjfx5hTHfODhJJ-3d3WFh5-pLf7RoD-tCNLBuak8p3LSviJINabG6b4aLaT_VFU6zTaPFuYYeMfOXMw1bKoK0RESA81ZofXp_4wVtqiuQLPGL2U.Gma2POjUQyhDX11QBausCw",
            'refreshTokenKey' => 'AB11685018345bIMipMvuOUrIy93UKkq5vGy07h9ceJBFTjyQC',
            'QBORealmID' => "4620816365272942040",
            'baseUrl' => "development"
        ));

        $items = $dataService->Query("SELECT * FROM Item ");

        dd($items);

        $title = 'All Items';

        return view('pages.quickbooks.products', compact('items', 'title'));
    }

    public function getProduct($id)
    {
        $dataService = DataService::Configure(array(
            'auth_mode' => 'oauth2',
            'ClientID' => config('quickbooks.client_id'),
            'ClientSecret' => config('quickbooks.client_secret'),
            'accessTokenKey' => "eyJlbmMiOiJBMTI4Q0JDLUhTMjU2IiwiYWxnIjoiZGlyIn0..eXdSXOwXWYlCG5Es8dfveA.QEYEYVZ57TyKY2srDTY4h3iXkgajDk7uRvYHUwDQf1OK1XcZrH2mQv7dKA60i_3HyZOYVuSJx-BWn2xEv6ruRbyKaloINwQ8oqrK_qDWGYrPf1ANCXyS5znwKkj6fLFwoL8p0S7JlZ_vsry1VEwq_v7dIuSgpWiNHuAqhKANIPWULS-x79DXPTJeZCUOcnPlN2Cq9ce40dbjffI6u-xC0d2Kc5t9hQ8PGSm1iMmQdx6RlvLqhSS7_YShqq-yFjX05zXinl3zHX8GoABB8gfMk7ELOeDJkoJedO6zpLeBxlEcdH2fnfAh4w0bpbAe20hbrVuRHlnKJZDsZEdIf9Of-wzeTppP8fiSw5MdizCtvAN5qCwCs0AZ8u9255-kfyzDHQXSY9fiz3MNabYdCm5TO1Z1AgmssFU_1ajNZ_R0lSRmzwm41bwkyohw2BeyBrJFadflz-Ae33jnSIywPPYym_tNgr-JMiBukxEcHQHv37Ds03WS4iL3SQNSLblEn5M9vpGa4YTSV11_2EVV1KXUHKLBIrPw9uHI20_MPBsMun4vKMNOW8yoADg4hqIZGl_GMckx2-zWwPxpoeafNyklNYuq0lc79hp-lUC6Gs3yTIDExKWrqzxtdytN5fydfUDnUELe8QDgqiAwEHtgcRjfx5hTHfODhJJ-3d3WFh5-pLf7RoD-tCNLBuak8p3LSviJINabG6b4aLaT_VFU6zTaPFuYYeMfOXMw1bKoK0RESA81ZofXp_4wVtqiuQLPGL2U.Gma2POjUQyhDX11QBausCw",
            'refreshTokenKey' => 'AB11685018345bIMipMvuOUrIy93UKkq5vGy07h9ceJBFTjyQC',
            'QBORealmID' => "4620816365272942040",
            'baseUrl' => "development"
        ));
        $item = $dataService->Query("SELECT * FROM Item where Id='$id'");
        dd($item);
    }

    public function createInvoiceGet()
       {
           $title = 'Create Invoice';
           return view('pages.quickbooks.createInvoice', compact('title'));
       }

    public function createInvoicePost(Request $request)
    {
     //   dd($request->all());
      $auth  = User::where('id', Auth::id())->first();
      if ($auth !=null){
          $dataService = DataService::Configure(array(
                'auth_mode' => 'oauth2',
                'ClientID' => config('quickbooks.client_id'),
                'ClientSecret' => config('quickbooks.client_secret'),
                'accessTokenKey' => "eyJlbmMiOiJBMTI4Q0JDLUhTMjU2IiwiYWxnIjoiZGlyIn0..eXdSXOwXWYlCG5Es8dfveA.QEYEYVZ57TyKY2srDTY4h3iXkgajDk7uRvYHUwDQf1OK1XcZrH2mQv7dKA60i_3HyZOYVuSJx-BWn2xEv6ruRbyKaloINwQ8oqrK_qDWGYrPf1ANCXyS5znwKkj6fLFwoL8p0S7JlZ_vsry1VEwq_v7dIuSgpWiNHuAqhKANIPWULS-x79DXPTJeZCUOcnPlN2Cq9ce40dbjffI6u-xC0d2Kc5t9hQ8PGSm1iMmQdx6RlvLqhSS7_YShqq-yFjX05zXinl3zHX8GoABB8gfMk7ELOeDJkoJedO6zpLeBxlEcdH2fnfAh4w0bpbAe20hbrVuRHlnKJZDsZEdIf9Of-wzeTppP8fiSw5MdizCtvAN5qCwCs0AZ8u9255-kfyzDHQXSY9fiz3MNabYdCm5TO1Z1AgmssFU_1ajNZ_R0lSRmzwm41bwkyohw2BeyBrJFadflz-Ae33jnSIywPPYym_tNgr-JMiBukxEcHQHv37Ds03WS4iL3SQNSLblEn5M9vpGa4YTSV11_2EVV1KXUHKLBIrPw9uHI20_MPBsMun4vKMNOW8yoADg4hqIZGl_GMckx2-zWwPxpoeafNyklNYuq0lc79hp-lUC6Gs3yTIDExKWrqzxtdytN5fydfUDnUELe8QDgqiAwEHtgcRjfx5hTHfODhJJ-3d3WFh5-pLf7RoD-tCNLBuak8p3LSviJINabG6b4aLaT_VFU6zTaPFuYYeMfOXMw1bKoK0RESA81ZofXp_4wVtqiuQLPGL2U.Gma2POjUQyhDX11QBausCw",
                'refreshTokenKey' => 'AB11685018345bIMipMvuOUrIy93UKkq5vGy07h9ceJBFTjyQC',
                'QBORealmID' => "4620816365272942040",
                'baseUrl' => "development"
          ));

          $dataService->setLogLocation("/Users/hlu2/Desktop/newFolderForLog");
          $robot = Robot::find($request->robotId);
          $dataService->throwExceptionOnError(true);
          //Add a new Invoice
          $theResourceObj = Invoice::create([
              "Line" => [
                  [
                      "Amount" => $request->totalPayableAmount,
                      "DetailType" => "SalesItemLineDetail",

                      "SalesItemLineDetail" => [
                       "ItemRef" => [
                         "value" => $robot->itemRef,
                         "name" => $request->robot_name,
                       ],
                        'Qty' => 5
                      ]
                  ]
              ],
                     "CustomerRef" => [
                       "value" => $auth->customerRef,
                       "name" => $auth->company_name
                     ],
                     "BillEmail" => [
                       "Address" => $auth->email
                     ],
                     "BillEmailCc" => [
                       "Address" => $auth->email
                     ],
                     "BillEmailBcc" => [
                       "Address" => $auth->email
                     ]
          ]);

          $resultingObj = $dataService->Add($theResourceObj);
          $error = $dataService->getLastError();
          if ($error) {
              return \response()->json(['status'=>0,'data'=>"The Status code is: " . $error->getHttpStatusCode() . " The Helper message is: " . $error->getOAuthHelperError() ."The Response message is: " . $error->getResponseBody() ]);
          } else {
          /*    echo "Created Id={$resultingObj->Id}. Reconstructed response body:\n\n";
              $xmlBody = XmlObjectSerializer::getPostXmlFromArbitraryEntity($resultingObj, $urlResource);
              echo $xmlBody . "\n";*/
           return \response()->json(['status'=>0,'data'=>$resultingObj]);
          }
      }
      else{
           return \response()->json(['status'=>0,'data'=>'No User!!!']);
      }
    }

    public function getInvoices()
    {
        $dataService = DataService::Configure(array(
            'auth_mode' => 'oauth2',
            'ClientID' => config('quickbooks.client_id'),
            'ClientSecret' => config('quickbooks.client_secret'),
            'accessTokenKey' => "eyJlbmMiOiJBMTI4Q0JDLUhTMjU2IiwiYWxnIjoiZGlyIn0..eXdSXOwXWYlCG5Es8dfveA.QEYEYVZ57TyKY2srDTY4h3iXkgajDk7uRvYHUwDQf1OK1XcZrH2mQv7dKA60i_3HyZOYVuSJx-BWn2xEv6ruRbyKaloINwQ8oqrK_qDWGYrPf1ANCXyS5znwKkj6fLFwoL8p0S7JlZ_vsry1VEwq_v7dIuSgpWiNHuAqhKANIPWULS-x79DXPTJeZCUOcnPlN2Cq9ce40dbjffI6u-xC0d2Kc5t9hQ8PGSm1iMmQdx6RlvLqhSS7_YShqq-yFjX05zXinl3zHX8GoABB8gfMk7ELOeDJkoJedO6zpLeBxlEcdH2fnfAh4w0bpbAe20hbrVuRHlnKJZDsZEdIf9Of-wzeTppP8fiSw5MdizCtvAN5qCwCs0AZ8u9255-kfyzDHQXSY9fiz3MNabYdCm5TO1Z1AgmssFU_1ajNZ_R0lSRmzwm41bwkyohw2BeyBrJFadflz-Ae33jnSIywPPYym_tNgr-JMiBukxEcHQHv37Ds03WS4iL3SQNSLblEn5M9vpGa4YTSV11_2EVV1KXUHKLBIrPw9uHI20_MPBsMun4vKMNOW8yoADg4hqIZGl_GMckx2-zWwPxpoeafNyklNYuq0lc79hp-lUC6Gs3yTIDExKWrqzxtdytN5fydfUDnUELe8QDgqiAwEHtgcRjfx5hTHfODhJJ-3d3WFh5-pLf7RoD-tCNLBuak8p3LSviJINabG6b4aLaT_VFU6zTaPFuYYeMfOXMw1bKoK0RESA81ZofXp_4wVtqiuQLPGL2U.Gma2POjUQyhDX11QBausCw",
            'refreshTokenKey' => 'AB11685018345bIMipMvuOUrIy93UKkq5vGy07h9ceJBFTjyQC',
            'QBORealmID' => "4620816365272942040",
            'baseUrl' => "development"
        ));
        $firstTenInvoices = $dataService->Query("SELECT * FROM Invoice");
        return \response()->json($firstTenInvoices);

    }
}
