<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery/jquery-1.9.0.js"></script>
<input type="text" id="mail" placeholder="mail@mail.com" onkeypress="Javascript: if (event.keyCode==13) EmailCheck();"/>
<input type="submit"  name="check" onclick="Javascript:Emailcheck();"/>
<div id="result"></div>
<script type="text/javascript">
    function Emailcheck(){
        var mail = document.getElementById('mail');
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if(!filter.test(mail.value)){
            alert('Your email address is not in a valid format');
            return false;
        }
        else{
            $.get('api.php',{emailvalidation:mail.value},function(data){
                $('#result').text(data);
            });
            return true;
        }
    }
</script>