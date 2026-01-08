<!DOCTYPE html>
<html>
<head>
    <title>Background Changer</title>
</head>


<body style="transition: background 0.3s;"
       data-onload-code="if(localStorage.bgURL){
            document.body.style.backgroundImage = 'url(' + localStorage.bgURL + ')';
            document.body.style.backgroundSize = 'cover';
            document.body.style.backgroundAttachment = 'fixed';
            document.getElementById('bgInput').value = localStorage.bgURL;
        }"
>

<input
    id="bgInput"
    type="text"
    placeholder="Enter image URL only"
    style="padding:10px; font-size:16px; width:300px;"
     data-oninput-code="if(this.value.indexOf('http') === 0){
            document.body.style.backgroundImage = 'url(' + this.value + ')';
            document.body.style.backgroundSize = 'cover';
            document.body.style.backgroundAttachment = 'fixed';
            localStorage.bgURL = this.value;   // SAVE AFTER REFRESH
        } else {
            this.value = localStorage.bgURL || '';
        }"
>

<script src="/js/app.js"></script>
</body>
</html>
