<?php
include 'db.php';
session_start();
if (isset($_GET['id'])) {
    # code...
    $id=$_GET['id'];
    $sql=$conn->prepare('select * from event where id=?');
    $sql->bind_param('i',$id);
    $sql->execute();
    $user=$sql->get_result()->fetch_assoc();
}
if ($_SERVER["REQUEST_METHOD"]==="POST") {
    # code...
     $fname=$_POST['fname'];
    $date=$_POST['date'];
    $cate=$_POST['cat'];
    $loca=$_POST['location'];
    $desc=$_POST['desc'];
    $sql=$conn->prepare('update event set name=?,date=?,category=?,location=?,description=? where id=?');
     $sql->bind_param('sdsssi',$fname,$date,$cate,$loca,$desc,$id);
     if ($sql->execute()) {
        # code...
        header('location:dash.php');
     }
}

?>
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
        <main>
            <div style=background:linear-gradient(yellow,aqua,pink);
                class="container col-5 p-3 border rounded shadow   "
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
                            value="<?= $user['name'];  ?>"
                        />
                        
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Date</label>
                        <input
                            type="date"
                            class="form-control"
                            name="date"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                               value="<?= $user['date'];  ?>"
                        />
                       
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Category</label>
                        <input
                            type="text"
                            class="form-control"
                            name="cat"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                               value="<?= $user['category'];  ?>"
                        />
                       
                    </div>
                      <div class="mb-3">
                        <label for="" class="form-label">Location</label>
                        <input
                            type="text"
                            class="form-control"
                            name="location"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                               value="<?= $user['location'];  ?>"
                        />
                       
                    </div>
                      <div class="mb-3">
                        <label for="" class="form-label">Description</label>
                        <input
                            type="text"
                            class="form-control"
                            name="desc"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                               value="<?= $user['description'];  ?>"
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

