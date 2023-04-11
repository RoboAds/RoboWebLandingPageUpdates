function callback() {
    const submitButton = document.getElementById("submit-button");
    submitButton.removeAttribute("disabled");
}

function readURL(input) {
    if (input.files && input.files[0]) {
        $('.custom-file-label').html('');
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#blah')
                .attr('src', e.target.result)
        };
        reader.readAsDataURL(input.files[0]);
        $('.custom-file-label').html(input.files[0].name);
        console.log('Selected file :' +input.files[0].name);
    }
}
/*      const sm=ScrollReveal({
          origin:'bottom',
          distance:'80px',
          duration:'1000',
          reset:true
      })
      sm.reveal('.tagline',{delay:500})
      sm.reveal('#about_gulfwale',{delay:500})
      sm.reveal('.description',{delay:200})
      sm.reveal('#listing',{delay:300})
action="{{route('client-details-submit')}}" class="contact-form" method="post"

*/

const sr = ScrollReveal({
    origin: 'right',
    distance: '80px',
    duration: '1000',
    reset: true
})

sr.reveal('#title_gulf', {delay: 500})

const dm = ScrollReveal({
    origin: 'left',
    distance: '80px',
    duration: '1300',
    reset: true,

})
dm.reveal('#coming_soon', {delay: 200})
