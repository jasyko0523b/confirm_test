window.addEventListener('DOMContentLoaded', function () {

    var elements = document.getElementsByClassName("opinion");

    Array.prototype.forEach.call(elements, function (item) {

        var originalText = item.innerText;

        const maxLength = 25; //上限文字数
        if (originalText.length > maxLength) {
            item.innerText = originalText.substr(0, maxLength) + '...';
        }

        item.addEventListener('mouseover', () => {
            item.innerText = originalText;
        });

        item.addEventListener('mouseleave', () => {
            if (originalText.length > maxLength) {
                item.innerText = originalText.substr(0, maxLength) + '...';
            }
        });

    });
});