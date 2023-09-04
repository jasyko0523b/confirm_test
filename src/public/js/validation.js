window.addEventListener('DOMContentLoaded', function () {

    var $inquiryErrors = document.getElementsByClassName("inquiry-form__item--error");

    Array.prototype.forEach.call($inquiryErrors, function($inquiryError) {
        if ($inquiryError.innerText == "") {
            setDefault($inquiryError.previousElementSibling);
        }
    });

    Array.prototype.forEach.call($inquiryErrors, function ($inquiryError) {
        if (!$inquiryError.innerText == "") {
            setError($inquiryError.previousElementSibling);
        }
    });

    var $input_items = document.getElementsByClassName("inquiry-form__item--input");
    Array.prototype.forEach.call($input_items, function ($item) {
        $item.addEventListener("focus", () => setDefault($item));
        $item.addEventListener("blur", () => check_validate($item));
    });

    const $textarea_items = document.getElementsByClassName("inquiry-form__item--textarea");

    Array.prototype.forEach.call($textarea_items, function ($item) {
        $item.addEventListener("focus", () => setDefault($item));
        $item.addEventListener("blur", () => check_validate($item));
        $item.addEventListener("keyup", (event) => {
            if (event.keyCode === 229) {
                return;
            }
            check_validate($item);
        });
    });

});

/*
入力フォームのエラーデザインを解除する
*/
function setDefault($this) {
    if ($this.classList.value.includes('error')) {
        $this.classList.remove('error');
        $this.nextElementSibling.textContent = "";
    }
}

/*
入力フォームにエラーデザインをセットする
*/
function setError($this) {
    if (!$this.classList.value.includes('error')) {
        $this.classList.add('error');
    }
}

/* バリデーションを確認する */
function check_validate($this) {
    switch ($this.name) {
        case "sei":
            if (check_required($this)) {
                $this.nextElementSibling.textContent = "姓を入力してください";
                setError($this);
                break;
            }
            break;
        case "mei":
            if (check_required($this)) {
                $this.nextElementSibling.textContent = "名を入力してください";
                setError($this);
                break;
            }
            break;
        case "email":
            if (check_required($this)) {
                $this.nextElementSibling.textContent = "メールアドレスを入力してください";
                setError($this);
                break;
            }
            break;
        case "postcode":
            if (check_required($this)) {
                $this.nextElementSibling.textContent = "郵便番号を入力してください";
                setError($this);
                break;
            }
            break;
        case "address":
            if (check_required($this)) {
                $this.nextElementSibling.textContent = "住所を入力してください";
                setError($this);
                break;
            }
            break;
        case "building_name":
            return;
        case "opinion":
            if (check_required($this) && $this != document.activeElement ) {
                $this.nextElementSibling.textContent = "ご意見を入力してください";
                setError($this);
                break;
            }
            if (check_max($this, 120)) {
                $this.nextElementSibling.textContent = "120字以内で入力してください";
                break;
            } else {
                setDefault($this);
                break;
            }
        default:
            return;
    }
}

/*
requiredチェック
*/
function check_required($this) {
    if (!$this.value) {
        return true;
    }
    return false;
};

function check_max($this, $i) {
    if ($this.value.length > $i) {
        setError($this);
        return true;
    }
    return false;
}