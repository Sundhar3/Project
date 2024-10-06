
    function vfun2() {
        var password2=document.value["form2"]["password2"].value;
        var cfpassword=document.value["form2"]["cfpassword"].value;

        if(password2 != cfpassword){
            document.getElementById.innerhtml="password dont match";
            return false;
        }

        if(password2 != '' && cfpassword != '')

        alert("Register Successfully..");
    }