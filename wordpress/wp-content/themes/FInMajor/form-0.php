<?php 
if (!$fN){
    $fN = 1;
}
?>
<form action="https://mycapital.autoweboffice.ru/?r=personal/newsletter/sub/add&id=28323&lg=ru&Contact[id_newsletter]=46" method="post" enctype="application/x-www-form-urlencoded" accept-charset="UTF-8">
    <div class="mailing-form">
        <input type="hidden" value="1" name="required_fields[email]" placeholder="">
        <input type="email" class="form-control form-control-lg" name="Contact[email]" required="" placeholder="Email" />
        <button class="btn btn-primary">
            <svg class="icon icon-arrow-right">
                <use xlink:href="#icon-arrow-right"></use>
            </svg>
        </button>
    </div>
    <div class="form-check form-check-<?=$fN;?>">
        <input type="checkbox" class="form-check-input is-invalid" id="check-<?=$fN;?>" required>
        <label class="form-check-label" for="check-<?=$fN;?>">Нажимая на кнопку, я даю 
            <a href="//mycapital.autoweboffice.ru/document/view/personaldata" target="_blank">согласие на обработку персональных данных</a>
        </label>
    </div>
    <div class="form_newsletter_hidden_field"></div>
    <div style="display: none;">
        <div style="display: none;">
            <input type="hidden" value="46" name="Contact[id_newsletter]">
        </div>
        <!-- API код канала рекламы -->
        <input type="hidden" value="0" name="Contact[id_advertising_channel_page]">
        <input type="hidden" name="formId" value="37">
        <input type="hidden" name="formVc" value="1744550738">
        <input type="hidden" name="_aid" value="">
        <input type="hidden" name="_vcaid" value="">
    </div>
</form>
