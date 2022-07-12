<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Landing Page E Tukang</title>
</head>
<body style="padding : 0px; margin : 0px;">
     <nav class="nav">
            <div class="logo">
               E <span style="color :rgb(255, 196, 0);">Tukang</span>
            </div>
            <button class="button_login"> 
                Login
            </button>
      </nav> 
     <div class="banner" >
        <div class="font">
            <h3 style="color :rgb(255, 196, 0);">
                Selamat Datang 
            </h3>
            <h6 style="font-weight: 100; color :rgb(107, 107, 107);">Di Sistem Informasi Jasa Pembangunan Dan Renovasi</h6>
            <div style="width: 65%; margin-top : 10px;">
                <p style="color :rgb(148, 148, 148); font-weight : 100; font-size : 16px;">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem commodi nihil voluptas aperiam ut provident iusto repudiandae inventore earum odio excepturi numquam voluptate harum veritatis assumenda ea, perferendis minima magnam.Veritatis obcaecati illum recusandae! Magni quos consequuntur labore optio est natus libero minus ullam soluta eveniet temporibus a, ipsam deleniti quaerat quasi ratione quibusdam veniam, fugiat obcaecati! Quisquam, voluptatibus et!
                </p>
            </div>

        </div>
    </div>
</body>
</html>

<style>
    *{
        padding : 0;
        margin : 0;
    }
.nav{

    display : flex; 
    padding: 10px;
    padding-left : 50px;
    padding-right : 50px;
    justify-content:  space-between;
    align-items: center;
    height: 50px;
   
}
.logo{
        color : rgb(107, 107, 107);
        font-weight: bold;
        font-size : 24px;
        font-family: Arial, Helvetica, sans-serif;
}
  
.font {
        color : rgb(211, 211, 211); 
        padding : 0; 
        margin : 0; 
        font-family: Arial, Helvetica, sans-serif;
        font-size: 49px;
    }
.button_login {
    width: 100px;
    border : none;
    background-color: rgb(255, 196, 0);
    height: 32px;
    color : rgb(107, 107, 107);
    border-radius : 30px;
    font-weight: bold;
}

.banner {

    height : 55vh;
    display: flex;
    padding: 60px;
    align-items: center;
   
}

</style>
{{-- background-image : linear-gradient(90deg,rgba(26, 20, 20, 0.938),rgba(26, 20, 20, 0.466)),url('{{asset('/img/background.jpg')}}'); --}}