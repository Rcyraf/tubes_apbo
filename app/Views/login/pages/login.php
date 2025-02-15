<?= $this->extend('login/layout/template'); ?>

<?= $this->section('content'); ?>
<div class="form">
    <div class="form__box">
        <div class="form__left">
            <div class="form__padding">
                
                <img class="form__image" src="https://i.pinimg.com/originals/8b/44/51/8b4451665d6b2139e29f29b51ffb1829.png" />
                
            </div>
        </div>
        <div class="form__right">
            <div class="form__padding-right">
                <form>
                    <h1 class="form__title" id="judulForm">Member Login</h1>
                    <input class="form__email" type="text" placeholder="Email" />
                    <input class="form__password" type="text" placeholder="******" />
                    <input class="form__submit-btn" type="submit" value="Login"/>
                </form>
                <span>Forgot 
                    <a class="form__link" href="#">Username</a><a> / </a>
                    <a class="form__link" href="#">Password</a></span>
                <p> <a class="form__link" href="#">Create your account</a></p>
                <p> <a class="form__link" href="<?= base_url('/'); ?>">Kembali Ke Homepage</a></p>

            </div>
        </div>
    </div>
</div>

<?= $this->endSection('content'); ?>