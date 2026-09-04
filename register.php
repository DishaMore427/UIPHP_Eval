<?php
include 'db.php';
if ($_SERVER['REQUEST_METHOD']==="POST") {
    # code...
    $fname=$_POST['fname'];
    $uname=$_POST['uname'];
    $email=$_POST['email'];
    $pnum=$_POST['pnum'];
    $pass=password_hash($_POST['pass'],PASSWORD_DEFAULT);
    $sql=$conn->prepare('insert into user(name,username,email,phone,password) values(?,?,?,?,?)');
    $sql->bind_param('sssis',$fname,$uname,$email,$pnum,$pass);
    if ($sql->execute()) {
        # code...
        header('location:login.php');
    }
}
?>


<style>
.fade-box {
  animation-name: fadeIn;
  animation-duration: 2s;
}
@keyframes fadeIn {
  from { opacity: 0; }
  to { opacity: 1; }
}
</style>

<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS v5.3.8 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
            crossorigin="anonymous"
        />
    </head>

    <body >
        <header>
            <!-- place navbar here -->
        </header>
        <main class="fade-box" >
            <h1 class='text-center'>Resgiter with us !!</h1>
            <div name="abc" 
            style=background:linear-gradient(yellow,aqua,pink)
                class="container col-5 pt-8 m-6 border rounded shadow "
            >
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="" class="form-label">FullName</label>
                        <input
                            type="text"
                            class="form-control"
                            name="fname"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                            
                        />
                        
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Username</label>
                        <input
                            type="text"
                            class="form-control"
                            name="uname"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                        />
                       
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Email</label>
                        <input
                            type="email"
                            class="form-control"
                            name="email"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                        />
                       
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Phone Number</label>
                        <input
                            type="text"
                            class="form-control"
                            name="pnum"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                        />
                       
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Password</label>
                        <input
                            type="Password"
                            class="form-control"
                            name="pass"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                        />
                        
                    </div>
                    
                    <button
                        type="submit"
                        class="btn btn-primary"
                    >
                        Submit
                    </button>
                    
                    
                    
                </form>
            </div>
            
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Bundle (includes Popper) -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"
        ></script>
    </body>
</html>


