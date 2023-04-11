@extends('index')
@section('description', 'New Breed Of Service Robots with 55inch digital signage screens in 4K resolution')
@section('keywords', 'Robot rental, One of the best mobile advertising robots, Robot on rent, Rent mr robot, The company advertising ')
@section('content')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dancing+Script">
    <link rel="stylesheet" href="{{asset('products/css/style.css')}}">
    <!-- Responsive Stylesheet -->
    <link rel="stylesheet" href="{{asset('products/css/responsive.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .nav-tabs .nav-link.active, .nav-tabs .nav-item.show .nav-link {
            background: linear-gradient(6deg, #04409b, #058cc0bd);
            color: white;
            border-radius: 0;
            white-space: nowrap !important;
        }

        .nav-tabs .nav-link {
            text-decoration: none;
            background: #e7e7e7;
            white-space: nowrap;
        }

        .fixed-top {
            background: #1481d9;
            height: 0;
        }

        .top-nav-collapse {
            height: auto;
        }


        .marathi {
            font-family: 'Palanquin', sans-serif !important;
        }

        .marathi.info p {
            margin-top: 0;
            font-weight: 600;
            margin-bottom: 0;
            font-family: 'Palanquin', sans-serif !important;
            font-size: 11px;
            color: #181818;
            line-height: 1.5;
        }

        p.text-center.mah_in {
            position: absolute;
            font-size: 12px;
            top: 5px;
            left: 47%;
            font-family: 'Palanquin', sans-serif !important;
        }

        .Signature ul li:before {
            content: '';
            position: absolute;
            top: -10px;
            border-top: 1px dashed #999;
            width: 44%;
        }

        td {
            word-break: break-all;
        }

        .marathi.info {
            margin-top: 20px;
        }

        .red {
            color: #f44336 !important;
        }

        /* content editable */

        *[contenteditable] {
            border-radius: 0.25em;
            min-width: 1em;
            outline: 0;
        }

        *[contenteditable] {
            cursor: pointer;
        }

        *[contenteditable]:hover, *[contenteditable]:focus, td:hover *[contenteditable], td:focus *[contenteditable], img.hover {
        }

        span[contenteditable] {
            display: inline-block;
        }

        /* heading */

        h1 {
            font: bold 100% sans-serif;
            letter-spacing: 0.5em;
            text-align: center;
            text-transform: uppercase;
        }

        /* table */

        table {
            font-size: 75%;
            table-layout: fixed;
            width: 100%;
        }

        table {
            border-collapse: separate;
            border-spacing: 2px;
        }

        th, td {
            border-width: 1px;
            padding: 0.5em;
            position: relative;
            text-align: left;
        }

        th, td {
            border-radius: 0.25em;
            border-style: solid;
        }

        th {
            background: #EEE;
            border-color: #BBB;
        }

        td {
            border-color: #DDD;
        }


        /* header */

        header {
            margin: 0 0 1em;
        }

        header:after {
            clear: both;
            content: "";
            display: table;
        }

        header h1 {
            background: #000;
            border-radius: 0.25em;
            color: #FFF;
            margin: 0 0 1em;
            padding: 0.5em 0;
        }

        header address {
            float: left;
            font-size: 75%;
            font-style: normal;
            line-height: 1.25;
            margin: 0 1em 1em 0;
        }

        header address p {
            margin: 0 0 0.25em;
        }

        header span, header img {
            display: block;
        }

        header span {
            max-height: 100%;
            max-width: 100%;
            position: relative;
        }

        header img {
            max-height: 100%;
            max-width: 100%;
            margin: 0 auto;
        }

        header input {
            cursor: pointer;
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
            height: 100%;
            left: 0;
            opacity: 0;
            position: absolute;
            top: 0;
            width: 100%;
        }

        /* article */

        article, article address, table.meta, table.inventory {
            margin: 0 0 3em;
        }

        article:after {
            clear: both;
            content: "";
            display: table;
        }

        article h1 {
            clip: rect(0 0 0 0);
            position: absolute;
        }

        article address {
            float: left;
            font-size: 125%;
            font-weight: bold;
        }

        /* table meta & balance */

        table.meta, table.balance {
            float: right;
            width: 40%;
        }

        table.meta:after, table.balance:after {
            clear: both;
            content: "";
            display: table;
        }

        /* table meta */

        table.meta th {
            width: 40%;
        }

        table.meta td {
            width: 60%;
        }

        /* table items */

        table.inventory {
            clear: both;
            width: 100%;
        }

        table.inventory th {
            font-weight: 400;
            text-align: center;
        }

        table.inventory td:nth-child(1) {
            width: 26%;
        }

        table.inventory td:nth-child(2) {
            width: 38%;
        }

        table.inventory td:nth-child(3) {
            text-align: right;
            width: 12%;
        }

        table.inventory td:nth-child(4) {
            text-align: right;
            width: 12%;
        }

        table.inventory td:nth-child(5) {
            text-align: right;
            width: 12%;
        }

        /* table balance */

        table.balance th, table.balance td {
            width: 50%;
        }

        table.balance td {
            text-align: right;
        }

        /* aside */

        aside h1 {
            border: none;
            border-width: 0 0 1px;
            margin: 0 0 1em;
        }

        aside h1 {
            border-color: #999;
            border-bottom-style: solid;
        }

        .left_info {
            width: 60%;
            display: inline-block;
            line-height: 1px;
        }

        .min_height {
            min-height: 283px;
        }

        /* javascript */

        .add, .cut {
            border-width: 1px;
            display: block;
            font-size: .8rem;
            padding: 0.25em 0.5em;
            float: left;
            text-align: center;
            width: 0.6em;
        }

        .add, .cut, .mah_btn {
            background-position: 0% 0%;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
            border-radius: 0.5em;
            border-color: #0076A3;
            color: #FFF;
            cursor: pointer;
            font-weight: bold;
            background-image: -webkit-linear-gradient(#00ADEE 5%, #0078A5 100%);
            background-color: #9AF;
            background-repeat: repeat;
            background-attachment: scroll;
        }

        .add {
            margin: -2.5em 0 0;
        }

        .add:hover {
            background: #00ADEE;
        }

        .cut {
            opacity: 0;
            position: absolute;
            top: 0;
            left: -1.5em;
        }

        .cut {
            -webkit-transition: opacity 100ms ease-in;
        }

        tr:hover .cut {
            opacity: 1;
        }

        @media print {
            * {
                -webkit-print-color-adjust: exact;
            }

            html {
                background: none;
                padding: 0;
            }

            body {
                box-shadow: none;
                margin: 0;
            }

            .add, .cut {
                display: none;
            }

            .input.clientDetails {
                border-bottom: none;
            }

        }

        @page {
            margin: 0;
        }

        header img {
            width: 816px;
            margin-left: -48px;
            max-width: 816px !important;
        }

        div.container a.navbar-brand {
            color: white;
        }

        img.stamp {
            margin-left: 5px;
            height: 50px;
            background: rgba(0, 0, 0, 0);
            box-shadow: 0 0 0 0 rgba(0, 0, 0, 0);
        }

        .bold {
            font-weight: 400;
        }

        .left_btn button.mah_btn {
            font-size: 14px;
            font-weight: 400;
            padding: 8px 19px;
            border-radius: 3px;
        }

        .left_btn {
            width: 50%;
            float: left;
        }

        .Signature ul li {
            font-size: 14px;
            text-transform: uppercase;
            display: inline-block;
            width: 48%;
            position: relative;
        }

        .Signature ul li:last-child {
            text-align: right;
        }

        ::-webkit-input-placeholder { /* WebKit browsers */
            color: #dbdbdb;
        }

        :-moz-placeholder { /* Mozilla Firefox 4 to 18 */
            color: #dbdbdb;
        }

        ::-moz-placeholder { /* Mozilla Firefox 19+ */
            color: #dbdbdb;
        }

        :-ms-input-placeholder { /* Internet Explorer 10+ */
            color: #dbdbdb;
        }

        textarea::-webkit-input-placeholder { /* WebKit browsers */
            color: #dbdbdb;
        }

        textarea:-moz-placeholder { /* Mozilla Firefox 4 to 18 */
            color: #dbdbdb;
        }

        textarea::-moz-placeholder { /* Mozilla Firefox 19+ */
            color: #dbdbdb;
        }

        textarea:-ms-input-placeholder { /* Internet Explorer 10+ */
            color: #dbdbdb;
        }

        @media print {
            .noprint {
                display: none !important;
            }

            .input.clientDetails {
                border-bottom: none;
            }

            ::-webkit-input-placeholder { /* WebKit browsers */
                color: transparent;
            }

            :-moz-placeholder { /* Mozilla Firefox 4 to 18 */
                color: transparent;
            }

            ::-moz-placeholder { /* Mozilla Firefox 19+ */
                color: transparent;
            }

            :-ms-input-placeholder { /* Internet Explorer 10+ */
                color: transparent;
            }

            textarea::-webkit-input-placeholder { /* WebKit browsers */
                color: transparent;
            }

            textarea:-moz-placeholder { /* Mozilla Firefox 4 to 18 */
                color: transparent;
            }

            textarea::-moz-placeholder { /* Mozilla Firefox 19+ */
                color: transparent;
            }

            textarea:-ms-input-placeholder { /* Internet Explorer 10+ */
                color: transparent;
            }

            .clientDetails {
                width: 400px;
                border-bottom: none;
                margin-bottom: 1px;
            }

            .left_btn {
                display: none;
            }


        }


        .display: {
            display: block;
        }

        table.cpanel td {
            text-align: center;
        }

        .clientDetails {
            width: 400px;
            border-bottom: 1px solid #ccc;
            margin-bottom: 3px;
            font-size: 15px;
        }

        .add, .cut, .add:hover, .cut:hover {
            text-decoration: none;
            height: auto;
            width: auto !important;
            color: white !important;
        }

        /* content editable */

        *[contenteditable] {
            border-radius: 0.25em;
            min-width: 1em;
            outline: 0;
        }

        *[contenteditable] {
            cursor: pointer;
        }

        *[contenteditable]:hover, *[contenteditable]:focus, td:hover *[contenteditable], td:focus *[contenteditable], img.hover {
            background: #fcf3a9;
            box-shadow: 0 0 1em 0.5em #DEF;
        }

        span[contenteditable] {
            display: inline-block;
        }


        .main{
            margin:1rem;
            max-width:350px;
            width:50%;
            height:250px;
        }
        @media(max-width:34em){
            .main{
                min-width:150px;
                width:auto;
            }
        }
        select {
            display: none !important;
        }

        .dropdown-select {
            background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.25) 0%, rgba(255, 255, 255, 0) 100%);
            background-repeat: repeat-x;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#40FFFFFF', endColorstr='#00FFFFFF', GradientType=0);
            background-color: #fff;
            border-radius: 6px;
            border: solid 1px #eee;
            box-shadow: 0px 2px 5px 0px rgba(155, 155, 155, 0.5);
            box-sizing: border-box;
            cursor: pointer;
            display: block;
            float: left;
            font-size: 14px;
            font-weight: normal;
            height: 42px;
            line-height: 40px;
            outline: none;
            padding-left: 18px;
            padding-right: 30px;
            position: relative;
            text-align: left !important;
            transition: all 0.2s ease-in-out;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            white-space: nowrap;
            width: auto;

        }

        .dropdown-select:focus {
            background-color: #fff;
        }

        .dropdown-select:hover {
            background-color: #fff;
        }

        .dropdown-select:active,
        .dropdown-select.open {
            background-color: #fff !important;
            border-color: #bbb;
            box-shadow: 0 1px 4px rgba(0, 0, 0, 0.05) inset;
        }

        .dropdown-select:after {
            height: 0;
            width: 0;
            border-left: 4px solid transparent;
            border-right: 4px solid transparent;
            border-top: 4px solid #777;
            -webkit-transform: origin(50% 20%);
            transform: origin(50% 20%);
            transition: all 0.125s ease-in-out;
            content: '';
            display: block;
            margin-top: -2px;
            pointer-events: none;
            position: absolute;
            right: 10px;
            top: 50%;
        }

        .dropdown-select.open:after {
            -webkit-transform: rotate(-180deg);
            transform: rotate(-180deg);
        }

        .dropdown-select.open .list {
            -webkit-transform: scale(1);
            transform: scale(1);
            opacity: 1;
            pointer-events: auto;
        }

        .dropdown-select.open .option {
            cursor: pointer;
        }

        .dropdown-select.wide {
            width: 100%;
        }

        .dropdown-select.wide .list {
            left: 0 !important;
            right: 0 !important;
        }

        .dropdown-select .list {
            box-sizing: border-box;
            transition: all 0.15s cubic-bezier(0.25, 0, 0.25, 1.75), opacity 0.1s linear;
            -webkit-transform: scale(0.75);
            transform: scale(0.75);
            -webkit-transform-origin: 50% 0;
            transform-origin: 50% 0;
            box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.09);
            background-color: #fff;
            border-radius: 6px;
            margin-top: 4px;
            padding: 3px 0;
            opacity: 0;
            overflow: hidden;
            pointer-events: none;
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 999;
            max-height: 250px;
            overflow: auto;
            border: 1px solid #ddd;
        }

        .dropdown-select .list:hover .option:not(:hover) {
            background-color: transparent !important;
        }
        .dropdown-select .dd-search{
            overflow:hidden;
            display:flex;
            align-items:center;
            justify-content:center;
            margin:0.5rem;
        }

        .dropdown-select .dd-searchbox{
            width:90%;
            padding:0.5rem;
            border:1px solid #999;
            border-color:#999;
            border-radius:4px;
            outline:none;
        }
        .dropdown-select .dd-searchbox:focus{
            border-color:#12CBC4;
        }

        .dropdown-select .list ul {
            padding: 0;
        }

        .dropdown-select .option {
            cursor: default;
            font-weight: 400;
            line-height: 40px;
            outline: none;
            padding-left: 18px;
            padding-right: 29px;
            text-align: left;
            transition: all 0.2s;
            list-style: none;
        }

        .dropdown-select .option:hover,
        .dropdown-select .option:focus {
            background-color: #f6f6f6 !important;
        }

        .dropdown-select .option.selected {
            font-weight: 600;
            color: #12cbc4;
        }

        .dropdown-select .option.selected:focus {
            background: #f6f6f6;
        }

        .dropdown-select a {
            color: #aaa;
            text-decoration: none;
            transition: all 0.2s ease-in-out;
        }

        .dropdown-select a:hover {
            color: #666;
        }
    </style>


    <section class="feature-list section">
        <div class="container">
            <form>
                <header>
      <span>
        <img alt="logo" src="https://nidomachineries.in/wp-content/uploads/2019/08/header-banner.gif"
             class="center logo" id="logo" title="Nido Machineries" draggable="false" style="-moz-user-select: none;">

      </span>
                </header>
                <article class="invoicebody">
                    <div class="left_info">
                     <div class="container">
                                    <div class="main">
                                      <h2>Dropdown with search box</h2>
                                      <select name="">
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                        <option value="4">Four</option>
                                    </select>
                                    </div>

                       </div><br>
                              <br>
                        <input type="text" class="clientDetails form-control" id="customer_name"
                               placeholder="Address"><br>
                        <input type="text" class="clientDetails form-control" id="occupation"
                               placeholder="Contact Person"><br>
                        <input type="text" class="clientDetails form-control" id="afm" placeholder="Contact No"><br>
                        <input type="text" class="clientDetails form-control" id="doy" placeholder="Email">
                    </div>
                    <table class="meta" id="top_data_table">
                        <tbody>
                        <tr class="" id="invoice_number_row">
                            <th class="bold"><span class="invoice" id="invoice">Reference&nbsp;No</span></th>
                            <td id="time"></td>
                        </tr>

                        <tr id="daterow">
                            <th class="bold"><span class="date" id="date">Date</span></th>
                            <td><span contenteditable=""><input type="date" id="theDate"></span></td>
                        </tr>

                        <tr class="" id="total_block">
                            <th class="bold"><span class="amount" id="amount">Ammout</span></th>
                            <td><span id="prefix">&#8377;</span><span></span></td>
                        </tr>

                        </tbody>
                    </table>
                    <div class="min_height">
                        <table class="inventory">
                            <thead>
                            <tr>
                                <th class="bold">
                                    <span class="item" id="item">Equipment Name & Model</span>
                                </th>
                                <th class="bold">
                                    <span class="description" id="description">HSN code & GST</span>
                                </th>
                                <th class="bold">
                                    <span class="rate" id="rate">Unit Price</span>
                                </th>
                                <th class="bold">
                                    <span class="quantity" id="quantity">Quantity</span>
                                </th>
                                <th class="bold">
                                    <span class="price" id="price">Total Price</span>
                                </th>
                            </tr>
                            </thead>

                            <tbody>
                            <tr>
                                <td>
                                    <a class="cut" title="Remove Item">-</a>
                                    <span contenteditable></span>
                                </td>
                                <td>
                                    <span contenteditable></span>
                                </td>
                                <td>
                                    <span data-prefix>&#8377;</span>
                                    <span contenteditable>0.00</span>
                                </td>
                                <td>
                                    <span contenteditable>1</span>
                                </td>
                                <td>
                                    <span data-prefix>&#8377;</span><span>0.00</span>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <a class="add noprint" title="Add Item">+</a>
                        <div class="left_btn">
                            <button class="mah_btn" onclick="myprint()">Print</button>
                            <button class="mah_btn" onClick="window.location.reload()">Reset</button>
                        </div>
                        <div class="right_tax">
                            <table class="balance" id="balance">
                                <tbody>

                                <tr>
                                    <th class="bold">
                                        <span class="subtotal" id="subtotal">Subtotal</span>
                                    </th>
                                    <td>
                                        <span>&#8377;</span><span>0.00</span>
                                    </td>
                                </tr>

                                <tr>
                                    <th class="bold">
                                        <span class="tax" id="tax" contenteditable="">Include GST&nbsp;</span>
                                        <span contenteditable="">18</span>%
                                    </th>
                                    <td>
                                        <span>&#8377;</span><span>0.00</span>
                                    </td>
                                </tr>

                                <tr>
                                    <th class="bold">
                                        <span class="total" id="total">Total</span>
                                    </th>
                                    <td>
                                        <span>&#8377; </span><span>0.00</span>
                                    </td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </article>
            </form>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


    <script>
        /* Shivving (IE8 is not supported, but at least it won't look as awful)
/* ========================================================================== */

        function create_custom_dropdowns() {
            $('select').each(function (i, select) {
                if (!$(this).next().hasClass('dropdown-select')) {
                    $(this).after('<div class="dropdown-select wide ' + ($(this).attr('class') || '') + '" tabindex="0"><span class="current"></span><div class="list"><ul></ul></div></div>');
                    var dropdown = $(this).next();
                    var options = $(select).find('option');
                    var selected = $(this).find('option:selected');
                    dropdown.find('.current').html(selected.data('display-text') || selected.text());
                    options.each(function (j, o) {
                        var display = $(o).data('display-text') || '';
                        dropdown.find('ul').append('<li class="option ' + ($(o).is(':selected') ? 'selected' : '') + '" data-value="' + $(o).val() + '" data-display-text="' + display + '">' + $(o).text() + '</li>');
                    });
                }
            });

            $('.dropdown-select ul').before('<div class="dd-search"><input id="txtSearchValue" autocomplete="off" onkeyup="filter()" class="dd-searchbox" type="text"></div>');
        }

        // Event listeners

        // Open/close
        $(document).on('click', '.dropdown-select', function (event) {
            if($(event.target).hasClass('dd-searchbox')){
                return;
            }
            $('.dropdown-select').not($(this)).removeClass('open');
            $(this).toggleClass('open');
            if ($(this).hasClass('open')) {
                $(this).find('.option').attr('tabindex', 0);
                $(this).find('.selected').focus();
            } else {
                $(this).find('.option').removeAttr('tabindex');
                $(this).focus();
            }
        });

        // Close when clicking outside
        $(document).on('click', function (event) {
            if ($(event.target).closest('.dropdown-select').length === 0) {
                $('.dropdown-select').removeClass('open');
                $('.dropdown-select .option').removeAttr('tabindex');
            }
            event.stopPropagation();
        });

        function filter(){
            var valThis = $('#txtSearchValue').val();
            $('.dropdown-select ul > li').each(function(){
                var text = $(this).text();
                (text.toLowerCase().indexOf(valThis.toLowerCase()) > -1) ? $(this).show() : $(this).hide();
            });
        };
        // Search

        // Option click
        $(document).on('click', '.dropdown-select .option', function (event) {
            $(this).closest('.list').find('.selected').removeClass('selected');
            $(this).addClass('selected');
            var text = $(this).data('display-text') || $(this).text();
            $(this).closest('.dropdown-select').find('.current').text(text);
            $(this).closest('.dropdown-select').prev('select').val($(this).data('value')).trigger('change');
        });

        // Keyboard events
        $(document).on('keydown', '.dropdown-select', function (event) {
            var focused_option = $($(this).find('.list .option:focus')[0] || $(this).find('.list .option.selected')[0]);
            // Space or Enter
            //if (event.keyCode == 32 || event.keyCode == 13) {
            if (event.keyCode == 13) {
                if ($(this).hasClass('open')) {
                    focused_option.trigger('click');
                } else {
                    $(this).trigger('click');
                }
                return false;
                // Down
            } else if (event.keyCode == 40) {
                if (!$(this).hasClass('open')) {
                    $(this).trigger('click');
                } else {
                    focused_option.next().focus();
                }
                return false;
                // Up
            } else if (event.keyCode == 38) {
                if (!$(this).hasClass('open')) {
                    $(this).trigger('click');
                } else {
                    var focused_option = $($(this).find('.list .option:focus')[0] || $(this).find('.list .option.selected')[0]);
                    focused_option.prev().focus();
                }
                return false;
                // Esc
            } else if (event.keyCode == 27) {
                if ($(this).hasClass('open')) {
                    $(this).trigger('click');
                }
                return false;
            }
        });

        $(document).ready(function () {
            create_custom_dropdowns();
        });


        (function (document) {
            var
                head = document.head = document.getElementsByTagName('head')[0] || document.documentElement,
                elements = 'article aside audio bdi canvas data datalist details figcaption figure footer header hgroup mark meter nav output picture progress section summary time video x'.split(' '),
                elementsLength = elements.length,
                elementsIndex = 0,
                element;

            while (elementsIndex < elementsLength) {
                element = document.createElement(elements[++elementsIndex]);
            }

            element.innerHTML = 'x<style>' +
                'article,aside,details,figcaption,figure,footer,header,hgroup,nav,section{display:block}' +
                'audio[controls],canvas,video{display:inline-block}' +
                '[hidden],audio{display:none}' +
                'mark{background:#FF0;color:#000}' +
                '</style>';

            return head.insertBefore(element.lastChild, head.firstChild);
        })(document);

        /* Prototyping
        /* ========================================================================== */

        (function (window, ElementPrototype, ArrayPrototype, polyfill) {
            function NodeList() {
                [polyfill]
            }

            NodeList.prototype.length = ArrayPrototype.length;

            ElementPrototype.matchesSelector = ElementPrototype.matchesSelector ||
                ElementPrototype.mozMatchesSelector ||
                ElementPrototype.msMatchesSelector ||
                ElementPrototype.oMatchesSelector ||
                ElementPrototype.webkitMatchesSelector ||
                function matchesSelector(selector) {
                    return ArrayPrototype.indexOf.call(this.parentNode.querySelectorAll(selector), this) > -1;
                };

            ElementPrototype.ancestorQuerySelectorAll = ElementPrototype.ancestorQuerySelectorAll ||
                ElementPrototype.mozAncestorQuerySelectorAll ||
                ElementPrototype.msAncestorQuerySelectorAll ||
                ElementPrototype.oAncestorQuerySelectorAll ||
                ElementPrototype.webkitAncestorQuerySelectorAll ||
                function ancestorQuerySelectorAll(selector) {
                    for (var cite = this, newNodeList = new NodeList; cite = cite.parentElement;) {
                        if (cite.matchesSelector(selector)) ArrayPrototype.push.call(newNodeList, cite);
                    }

                    return newNodeList;
                };

            ElementPrototype.ancestorQuerySelector = ElementPrototype.ancestorQuerySelector ||
                ElementPrototype.mozAncestorQuerySelector ||
                ElementPrototype.msAncestorQuerySelector ||
                ElementPrototype.oAncestorQuerySelector ||
                ElementPrototype.webkitAncestorQuerySelector ||
                function ancestorQuerySelector(selector) {
                    return this.ancestorQuerySelectorAll(selector)[0] || null;
                };
        })(this, Element.prototype, Array.prototype);

        /* Helper Functions
        /* ========================================================================== */

        function generateTableRow() {
            var emptyColumn = document.createElement('tr');


            emptyColumn.innerHTML = '<td><a class="cut" title="Remove Item">-</a><span contenteditable></span></td>' +
                '<td><span contenteditable></span></td>' +
                '<td><span data-prefix>₹</span><span contenteditable>0.00</span></td>' +
                '<td><span contenteditable>1</span></td>' +
                '<td><span data-prefix>₹</span><span>0.00</span></td>';

            return emptyColumn;
        }

        function parseFloatHTML(element) {
            return parseFloat(element.innerHTML.replace(/[^\d\.\-]+/g, '')) || 0;
        }

        function parsePrice(number) {
            return number.toFixed(2).replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1,');
        }

        /* Update Number
        /* ========================================================================== */

        function updateNumber(e) {
            var
                activeElement = document.activeElement,
                value = parseFloat(activeElement.innerHTML),
                wasPrice = activeElement.innerHTML == parsePrice(parseFloatHTML(activeElement));

            if (!isNaN(value) && (e.keyCode == 38 || e.keyCode == 40 || e.wheelDeltaY)) {
                e.preventDefault();

                value += e.keyCode == 38 ? 1 : e.keyCode == 40 ? -1 : Math.round(e.wheelDelta * 0.025);
                value = Math.max(value, 0);

                activeElement.innerHTML = wasPrice ? parsePrice(value) : value;
            }

            updateInvoice();
        }

        /* Update Invoice
        /* ========================================================================== */

        function updateInvoice() {
            var total = 0;
            var cells, price, total, a, i;

            // update inventory cells
            // ======================

            for (var a = document.querySelectorAll('table.inventory tbody tr'), i = 0; a[i]; ++i) {
                // get inventory row cells
                cells = a[i].querySelectorAll('span:last-child');

                // set price as cell[2] * cell[3]
                price = parseFloatHTML(cells[2]) * parseFloatHTML(cells[3]);

                // add price to total
                total += price;

                // set row total
                cells[4].innerHTML = price;
            }

            // update balance cells
            // ====================

            // get label cells
            label_cells = document.querySelectorAll('table.balance th span:last-child');
            tax_rate = label_cells[1].innerHTML / 100;

            // get balance cells
            cells = document.querySelectorAll('table.balance td:last-child span:last-child');

            // set total
            cells[0].innerHTML = total;

            // set tax
            cells[1].innerHTML = parsePrice(total * tax_rate);

            // set balance and meta balance
            cells[2].innerHTML = document.querySelector('table.meta tr:last-child td:last-child span:last-child').innerHTML = parsePrice(total + parseFloatHTML(cells[1]));

            // update prefix formatting
            // ========================

            var prefix = document.querySelector('#prefix').innerHTML;
            for (a = document.querySelectorAll('[data-prefix]'), i = 0; a[i]; ++i) a[i].innerHTML = prefix;

            // update price formatting
            // =======================

            for (a = document.querySelectorAll('span[data-prefix] + span'), i = 0; a[i]; ++i) if (document.activeElement != a[i]) a[i].innerHTML = parsePrice(parseFloatHTML(a[i]));
        }

        /* On Content Load
        /* ========================================================================== */

        function onContentLoad() {
            updateInvoice();

            var
                input = document.querySelector('input'),
                image = document.querySelector('img');

            function onClick(e) {
                var element = e.target.querySelector('[contenteditable]'), row;

                element && e.target != document.documentElement && e.target != document.body && element.focus();

                if (e.target.matchesSelector('.add')) {
                    document.querySelector('table.inventory tbody').appendChild(generateTableRow());
                } else if (e.target.className == 'cut') {
                    row = e.target.ancestorQuerySelector('tr');

                    row.parentNode.removeChild(row);
                }

                updateInvoice();
            }

            function onEnterCancel(e) {
                e.preventDefault();

                image.classList.add('hover');
            }

            function onLeaveCancel(e) {
                e.preventDefault();

                image.classList.remove('hover');
            }

            function onFileInput(e) {
                image.classList.remove('hover');

                var
                    reader = new FileReader(),
                    files = e.dataTransfer ? e.dataTransfer.files : e.target.files,
                    i = 0;

                reader.onload = onFileLoad;

                while (files[i]) reader.readAsDataURL(files[i++]);
            }

            function onFileLoad(e) {
                var data = e.target.result;

                image.src = data;
            }

            if (window.addEventListener) {
                document.addEventListener('click', onClick);

                document.addEventListener('mousewheel', updateNumber);
                document.addEventListener('keydown', updateNumber);

                document.addEventListener('keydown', updateInvoice);
                document.addEventListener('keyup', updateInvoice);

                input.addEventListener('focus', onEnterCancel);
                input.addEventListener('mouseover', onEnterCancel);
                input.addEventListener('dragover', onEnterCancel);
                input.addEventListener('dragenter', onEnterCancel);

                input.addEventListener('blur', onLeaveCancel);
                input.addEventListener('dragleave', onLeaveCancel);
                input.addEventListener('mouseout', onLeaveCancel);

                input.addEventListener('drop', onFileInput);
                input.addEventListener('change', onFileInput);
            }
        }

        window.addEventListener && document.addEventListener('DOMContentLoaded', onContentLoad);

        //------------------------------------------

        //------------------------------------------

        function serial_file() {
            document.getElementById("serial").value = Date.now();
        }

        function un_serial_file() {
            document.getElementById("serial").value = "";
        }

        //---------------------------------------------------------

        var today = new Date();
        var dd = today.getDate();
        var mm = today.getMonth() + 1; //January is 0!
        var yyyy = today.getFullYear();

        if (dd < 10) {
            dd = '0' + dd;
        }

        if (mm < 10) {
            mm = '0' + mm;
        }


        today = dd + '/' + mm + '/' + yyyy;
        today_form = yyyy + '-' + dd + '-' + mm + ' ';
        var serial = Date.now();

        //-----------------------------------------------------
        function myprint() {
            window.print();
        }

        //-----------------------------------------------------


    </script>
@endsection
