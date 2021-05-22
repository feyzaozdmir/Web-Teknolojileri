function control()
		{
            var x = document.forms["contact-form"]["name"].value;
			if (x == "") 
			{
				alert("İsim boş bırakılamaz");
				return false;
			}

			var y = document.forms["contact-form"]["email"].value;
			if (y == "") 
			{
				email.checkValidity();
				return false;
			}

			var forMail = /^[a-zA-Z0-9._-]+@([a-zA-Z0-9.-]+.)+([.])+[a-zA-Z0-9.-]{2,4}$/;
			if (forMail.test(y) == false) 
			{
				alert("Geçersiz Mail Adresi!!!");
				return false;
			}

            var z = document.forms["contact-form"]["adress"].value;
			if (z == "") 
			{
				alert("Adres boş bırakılamaz");
				return false;
			}

            var k = document.forms["contact-form"]["phone"].value;
			if (k == "") 
			{
				alert("Numara boş bırakılamaz");
				return false;
			}

            var l = document.forms["contact-form"]["birthday"].value;
			if (l == "") 
			{
				alert("Tarih boş bırakılamaz");
				return false;
			}

            var m = document.forms["contact-form"]["message"].value;
			if (m == "") 
			{
				alert("Alan boş bırakılamaz");
				return false;
			}



		}	

