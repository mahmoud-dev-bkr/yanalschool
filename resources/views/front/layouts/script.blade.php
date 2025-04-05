<!-- JavaScript Libraries -->
<script src="{{ asset('front/js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('front/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('front/lib/wow/wow.min.js') }}"></script>
<script src="{{ asset('front/lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('front/lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('front/lib/owlcarousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('front/lib/counterup/counterup.min.js') }}"></script>

<!-- Template Javascript -->
<script src="{{ asset('front/js/main.js') }}"></script>
<script src="{{ asset('assets/js/sweetalert2.js') }}"></script>
<script src="{{ asset('front/js/viewer.js') }}"></script>

<script src="{{ asset('front/js/jquery-viewer.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

@yield('js')
<script>



    var whatsapp_base_url= 'https://wa.me/{phone}/?text={text}';

    function validate(data) {
        var valid = true;
        Object.keys(data).forEach(key => {
            if (!data[key]) {
                valid = false;
            }
        });
        return valid;
    }
    function sendOrder(product) {
        var text = '';

        var data = {
            name: $('#name').val(),
            address: $('#address').val(),
            phone: $('#phone').val(),
            product: product,
            notes: $('#notes').val(),
        };

        if (!validate(data)) {
            alert('Please fill all the fields');
            return false;
        }

        Object.keys(data).forEach(key => {
            text += key + ' :' + data[key] + " \n" ;

        });

            var link = whatsapp_base_url
            .replace('{phone}', "{{ getSettingValue('whatsapp_phone') }}")
            .replace('{text}', encodeURIComponent(text));

            console.log(link + text)
            window.open(link , "_blank");
    }


    @if(count($errors) > 0)

       var list = {!! $errors !!};
       var values = '';
       jQuery.each(list, function (key, value) {
            values += value + '\n';
        });
               $(document).ready(function() {
               swal.fire({
                   // title: 'Error!',
                   text: values,
                   icon: 'error'
               });
           });


       @endif




</script>
  <script>
        var whatsapp_base_url = 'https://wa.me/{phone}/?text={text}';



        function sendDataToWhatsapp(title) {
            var text = '';
            var data = {
                service: title,

            };
            Object.keys(data).forEach(key => {
                text += key + ' :' + data[key] + " \n";

            });

            var link = whatsapp_base_url
                .replace('{phone}', "{{ getSettingValue('whatsapp') }}")
                .replace('{text}', encodeURIComponent(text));

            console.log(link + text)
            window.open(link, "_blank");
        }
    </script>
<script>
  new WOW().init();
</script>