<style>
    .btn-lg, .btn-group-lg>.btn {
        padding: 10px 15px;
        font-size: 19px;
        line-height: 1.3333333;
        border-radius: 6px;

</style>
<div class="forma">
    <div class="container">
        <br><br>
        <h2 class="title text-center title-news">Пишите нам</h2>

        <div class="row">
            <div class="form-group col-sm-4">
                <label for="name"class="h4">Имя</label>
                <input type="text" class="form-control" id="name"  placeholder="Введите ваше имя" required>
            </div>
            <div class="form-group col-sm-4">
                <label for="email" class="h4">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Введите ваш email" required>
            </div>
            <div class="form-group col-sm-4">
                <label for="tema" class="h4">Тема</label>
                <input type="text" class="form-control" id="tema" placeholder="Введите вашу тему" required>
            </div>
        </div>
        <div class="form-group">
            <label for="message"class="h4 ">Сообщение</label>
            <textarea id="message" class="form-control" rows="5" placeholder="Введите сообщение" required></textarea>
        </div>
        <button type="submit" id="form-submit" class="btnbtn-success btn-lg pull-left ">Отправить</button>
        <div id="msgSubmit" class="h3 text-center hidden">Введите сообщение</div>

    </div>
</div>

<script>
    $("#contactForm").submit(function(event){
        // cancels the form submission
        event.preventDefault();
        submitForm();
    });

    $("#contactForm").validator().on("submit", function(event) {
        if(event.isDefaultPrevented()) {
            // обработка неправильной формы...
        } else{
            // все хорошо!
            event.preventDefault();
            submitForm();
        }
    });
</script>