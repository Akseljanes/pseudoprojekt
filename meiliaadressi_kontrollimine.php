
<input type="text" id="mail" placeholder="mail@mail.com" onkeypress="Javascript: if (event.keyCode==13) EmailCheck();"/>
<input type="submit"  name="check" onclick="Javascript:Emailcheck();"/>
<script type="text/javascript">
    function Emailcheck(){
        var mail = document.getElementById('mail');
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if(!filter.test(mail.value)){
            alert('Your email address is not in a valid format');
            return false;
        }
        else{
            alert('Email is correct');
            return true;
        }
    }
</script>