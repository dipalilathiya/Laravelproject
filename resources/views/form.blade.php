<!DOCTYPE html>  
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
         .box{
              width: 400px;
              height: 400px;
              border: 4px solid #30333d;
              border-radius:0px 150px 0px 150px;
              margin: auto;
              background-color: #30333d;
              margin-top: 200px;
              /* box-shadow: 0px 0px 10px 2px rgb(24, 24, 24); */
              color:white ;
        }
        .box1 input{
            width:250px;
            height: 35px;
            border: none;
            border-radius: 20px;
        }
        .box1 input::placeholder{
            margin-left:20px ;
            position: absolute;
        }
        .box1{
              width: 300px;
              height: 380px;
              margin: auto;
              border-radius:0px 150px 0px 150px;
            
              background-color: #30333d;
 
        }
        .box2 input{
            width:150px;
            height: 40px;
            margin-top:30px;
           margin-left:50px ;
        }
</style>
<body>
    <div class="box">
    <div class="box1">

       <form method="post" enctype="multipart/form-data" action="{{route('create')}}">

        @csrf
       
        <input type="text" name="id" value="{{@$edit->id}}">
       <p>Name</p>
       <input type="text" name="name" placeholder="Name" value="{{isset($edit)?$edit->name:''}}">
       <p>Email</p>
       <input type="text" name="email" placeholder="Email" value="{{isset($edit)?$edit->email:''}}">
       <p>Password</p>
       <input type="password" name="password" placeholder="Password" value="{{isset($edit)?$edit->password:''}}">
       <div class="box2">
       <input type="submit" name="submit">      
    </div> 
     </form>
    </div>
    </div>
</body>
</html>