<?php include_once ("header.php");?>
<div class="container-fluid ">
            <div class="col-sm-68col-sm-offset-2">
                    <h3 class="lead center-block text-center text-uppercase text-info"><b>Зворотній зв'язок</b></h3>
                    <form role="form" id="contactForm" data-toggle="validator" class="shake">
                        <div class="row" style="background-color: white">
                            <div class="form-group col-sm-6">
                                <label for="name" class="h4">Ваше ім'я</label>
                                <input type="text" class="form-control" id="name" placeholder="Іванов Іван" required data-error="Будь-ласка, заповніть це поле">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="email" class="h4">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="ivanov.ivan@mail.ru" required data-error="Будь-ласка, заповніть це поле">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="message" class="h4 ">Повідомлення</label>
                            <textarea id="message" class="form-control" rows="5" placeholder="Введіть Ваше повідомлення" required data-error="Будь-ласка, заповніть це поле"></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <div class="g-recaptcha" data-sitekey="6LdO8B0TAAAAAIiMFwghU-t5rLFpFW49qCWkAwXD"></div>
                        </div>
                        <div class="form-group">
                            <button type="submit" id="form-submit" class="btn btn-success btn-lg pull-right ">Відправити</button>
                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                            <div class="clearfix"></div>
                        </div>
                    </form>
            </div>
    </div>


    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src="js/validator.min.js"></script>
    <script src="js/form-scripts.js"></script>
<?php include_once ("footer.php");?>
