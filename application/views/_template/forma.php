
<style>
    .well {
        background-color: #f9f9f9;
    }
    #form-submit{
        background-color: #033071;
        border: none;
    }
</style>

<div class="forma">
    <div class="container">
        <br><br>
        <h2 class="title text-center title-news">Пишите нам</h2>

        <div class="well">
            <form role="form" id="contactForm" data-toggle="validator" class="shake">
                <div class="row">
                    <div class="form-group col-sm-4">
                        <label for="name" class="h4">Имя</label>
                        <input type="text" class="form-control" id="name" placeholder="Введите ваше имя" required data-error="Введите корректное имя">
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group col-sm-4">
                        <label for="thema" class="h4">Тема</label>
                        <input type="text" class="form-control" id="thema" placeholder="Введите вашу тему" required data-error="Введите корректную тему">
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group col-sm-4">
                        <label for="email" class="h4">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Введите ваш email" required>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="message" class="h4 ">Сообщение</label>
                    <textarea id="message" class="form-control" rows="5" placeholder="Введите сообщение" required></textarea>
                    <div class="help-block with-errors"></div>
                </div>
                <button type="submit" id="form-submit" class="btn btn-success btn-lg pull-left ">Отправить</button>
                <div id="msgSubmit" class="h3 text-center hidden">Введите сообщение</div>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div>


<script>
    $("#contactForm").validator().on("submit", function (event) {
        if (event.isDefaultPrevented()) {
            // handle the invalid form...
            formError();
            submitMSG(false, "Вы правильно заполнили форму?");
        } else {
            // everything looks good!
            event.preventDefault();
            submitForm();
        }
    });


    function submitForm(){
        // Initiate Variables With Form Content
        var name = $("#name").val();
        var thema = $("#thema").val();
        var email = $("#email").val();
        var message = $("#message").val();

        $.ajax({
            type: "POST",
            url: "php/form-process.php",
            data: "name=" + name + "&thema=" + thema +"&email=" + email + "&message=" + message,
            success : function(text){
                if (text == "success"){
                    formSuccess();
                } else {
                    formError();
                    submitMSG(false,text);
                }
            }
        });
    }

    function formSuccess(){
        $("#contactForm")[0].reset();
        submitMSG(true, "Письмо отправлено")
    }

    function formError(){
        $("#contactForm").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
            $(this).removeClass();
        });
    }

    function submitMSG(valid, msg){
        if(valid){
            var msgClasses = "h3 text-center tada animated text-success";
        } else {
            var msgClasses = "h3 text-center text-danger";
        }
        $("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
    }
</script>
