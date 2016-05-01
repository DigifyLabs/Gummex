/**
 * Created by Sherif on 4/12/2016.
 */

var app = {
    current_step:"one",

    update_price:function(){
        var post_price = $('.selectpicker').find(':selected').attr('data-price');
        var extras_price = 0;
        var how_often = 0 ;
        var extras = $('.extra');
        if(extras.length > 0)
        {
            for(var i =0; i < extras.length ; i++)
            {
                var extra = extras[i];

                if($(extra).attr('data-selected') == "true")
                {
                    extras_price += parseFloat($(extra).attr('data-price'));
                }
            }
        }

        how_often = $('.how_often').find(':selected').attr('data-price');

        var total = parseFloat(extras_price) + parseFloat(post_price) + parseFloat(how_often);
        $('.total').text(total);
        if(total > 0)
        {
            $('.row_total').removeClass('hidden')
        }

    },
    handle_steps:{
        one:function(e){
            // check if controls are empty or not
            zip = $('#zip').val();
            date = $('#date').val();
            time = $('#time').val();
            if(zip != "" && date != "" && time != "")
            {
                // update side bar
                this.total +=
                $('.order_date').text(date)
                $('.order_time').text(time)

                $('.row_datetime').removeClass('hidden')

                // show next step
                e.preventDefault();
                $('.step_one').fadeOut();
                $('.step_two').removeClass('hidden');
                $('.step_two').fadeIn();
                $('.top-step-two').addClass('step-process')
                this.current_step = "two" ;
            }
            else
            {
                smoke.signal("Please fill all fields",function(){},{duration:2000});
                return;
            }
        },
        two:function(e){
            // show next step
            e.preventDefault();
            $('.step_two').fadeOut();
            $('.step_three').removeClass('hidden');
            $('.step_three').fadeIn();
            $('.top-step-three').addClass('step-process')
            this.current_step = "three"
        },
        three:function(e){
            e.preventDefault();
            //validate
            var name = $('#name').val();
            var address = $('#address').val();
            var phone = $('#phone').val();
            var email = $('#email').val();
            var zip = $('#zip').val();
            var date = $('#date').val();
            var time = $('#time').val();
            var total = $('.total').text();
            var note = $('#order_note').val();

            if(name == "" || address == "" || phone == "" || email == "" )
            {
                smoke.signal("Please fill all fields",function(){},{duration:2000});
                return;
            }

            $('.order_phone').text(phone);
            $('.order_name').text(name);
            $('.order_email').text(email);
            $('.order_address').text(address);
            $('.order_zip').text(zip);
            $('.order_date').text(date);
            $('.order_time').text(time);
            $('.order_total').text(total);
            if(note == "")
                note = "None";
            $('.order_note').text(note);


            if(name != "" && phone !== "" && address != "")
            {
                e.preventDefault();
                $('.step_three').fadeOut();
                $('.step_four').removeClass('hidden');
                $('.step_four').fadeIn();
                $('.top-step-four').addClass('step-process')
                this.current_step = "four";
            }

        },
        four:function(e){
            e.preventDefault();
            // prepare post data
            data = {
                date : $('#date').val(),
                time : $('#time').val(),
                how_often:$('.how_often').val(),
                name : $('.order_name').text(),
                email : $('.order_email').text().replace(/\s/g, ''),
                address : $('.order_address').text(),
                phone : $('.order_phone').text(),
                zip : $('.order_zip').text(),
                total : $('.order_total').text(),
                payment_method_id : $('input[name="payment"]:checked').val(),
                extras:{},
                payment_details : ""
            }
            // get extras
            var extras = $('.extra');
            if(extras.length > 0)
            {
                for(var i =0; i < extras.length ; i++)
                {
                    var extra = extras[i];

                    if($(extra).attr('data-selected') == "true")
                    {
                        data.extras[$(extra).attr('data-id')] = $(extra).attr('data-price')
                    }
                }
            }
            // get payment details
            if($('input[name="payment"]:checked').val() == 2)
            {
                accountName = $('#accountName').val()
                accountIBAN = $('#accountIBAN').val()
                accountBIC = $('#accountBIC').val()

                if(accountBIC == "" || accountIBAN == "" || accountName == "")
                {
                    smoke.signal("Please enter your bank details",function(){},{duration:2000});
                    return;
                }
                payment_data = {
                    name:accountName,
                    iban:accountIBAN,
                    bic:accountBIC
                }
                data.payment_details = payment_data;
            }

            if($('input[name="payment"]:checked').val() == 1)
            {

                payment_data = {
                    name:"Paypal"
                }
                data.payment_details = payment_data;

            }

            $('#create_order_button').text('Processing');
            $('#create_order_button').prop('disabled',true);
                console.log(data);
            $.ajax({
                url:"http://localhost/Gummex/public/api/v/0.1/orders",
                method:"POST",
                data:data,
                success:function(res){
                    console.log(res);
                    if(res.status == true)
                    {
                        if($('input[name="payment"]:checked').val() == 1)
                        {
                            //smoke.alert('Congratulations, hatem');
                             window.location="http://localhost/Gummex/public/home/"+res.order_id;
                            return "hatem";

                        }


                        //$('.step_four').fadeOut();
                        smoke.alert('Congratulations, your order has been successfully created and a confirmation' +
                            ' email was sent to your email address');
                    }
                }
            })
        },
        back: function(){
            if(this.current_step != "one")
            {
                // Hide current step
                $('.step_'+this.current_step).fadeOut();
                $('.top-step-'+this.current_step).removeClass('step-process')

                //Show previous one
                var previous = this.get_previous_step();
                $('.step_'+previous).removeClass('hidden');
                $('.step_'+previous).fadeIn();

                this.current_step = previous;
            }
        },
        get_previous_step:function(){
            switch (this.current_step)
            {
                case "two":
                    return "one";
                    break;
                case "three":
                    return "two";
                    break;
                case "four":
                    return "three";
                    break;
            }
        }
    },
    extra_click:function(box){
            icon_element = box.find('i')
            icon = $(icon_element).attr('data-icon');
            if($(icon_element).hasClass('fa-check'))
            {
                $(box).attr('data-selected',"false");
                $(icon_element).removeClass('fa-check');
                $(icon_element).addClass(icon);
                box.css('background-color',"#FFF");
            }
            else
            {
                $(box).attr('data-selected',"true");
                $(icon_element).removeClass(icon);
                $(icon_element).addClass('fa-check');
                box.css('background-color',"#00aeef")
            }
        var services = [] ;
        if($('.extras').find("[data-selected='true']").length <= 0)
        {
            $('.extras_text_container').addClass('hidden');
        }
        else
        {
            $('.order_extras').empty();
            $('.selected_extras').empty().html();
            var extras = $('.extra');
            for(var i = 0 ; i < extras.length; i++)
            {
                var extra = extras[i];
                icon_element = $(extra).find('i')
                if($(icon_element).hasClass('fa-check'))
                {
                    var service_text = $($(extra).find('.extra-text')).text();
                    services.push(service_text)
                    var service_price = $(extra).attr('data-price');
                    var service_element = "<h5>"+service_text+": &euro;"+service_price+"</h5>";
                    $('.order_extras').append(service_element);
                }
            }
            $('.extras_text_container').removeClass('hidden');
        }

        if(services.length > 0)
        {
            var string = ""
            for(var i = 0; i < services.length ; i++)
            {
                if(i == services.length - 1)
                    string = string + services[i]
                else
                    string = string + services[i] + ",";
            }
            $('.selected_extras').text(string);
        }
        else
        {
            $('.selected_extras').text("None");
        }

    },
}
