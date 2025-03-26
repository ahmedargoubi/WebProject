<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Boot</title>

    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@300..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"> 
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }
        .h-font {
            font-family: 'Merienda', cursive;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand me-5 fw-bold fs-3 " href="index.php">Mövenpick</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item active">
                        <a class="nav-link active me-2" href="#">Home <span class="visually-hidden">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  me-2"  href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  me-2" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  me-2" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  me-2" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  me-2" href="#">Link</a>
                    </li>

                </ul>
                <div class="d-flex">
                   
                    
                   
                <button type="button" class="btn me-lg-4  me-4" style="background-color: #8c7343; border-color: #8c7343; color: white; padding: 0.75rem 1.5rem;
  outline: none;
  border: none;
  font-size: 1rem;
  font-weight: 500;
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
  margin-right: 95px;" data-bs-toggle="modal" data-bs-target="#LoginModal">
  Login
</button>
<button type="button" class="btn me-lg-4  me-4" style="background-color: #8c7343; border-color: #8c7343; color: white; padding: 0.75rem 1.5rem;
  outline: none;
  border: none;
  font-size: 1rem;
  font-weight: 500;
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
  margin-right: 95px;" data-bs-toggle="modal" data-bs-target="#registerModal">
  Register
</button>

                 </div>
            </div>
        </div>
    </nav>

    <div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form>
      <div class="modal-header" >
      <h5 class="modal-title"> <i class="bi bi-person-lines fs-3 me-2 align-items-center"></i>User Registration</h5>
        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        Note: Your details must match with your ID (Aadhaar card, passport, driving license) that will be required during check-in.
    </span>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 ps-0 mb-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control shadow-none">
            </div>
            <div class="col-md-6 p-0 mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control shadow-none">
            </div>
            <div class="col-md-6 ps-0 mb-3">
                <label class="form-label">Phone Number</label>
                <input type="tel" class="form-control shadow-none">
            </div>
            <div class="col-md-6 p-0 mb-3">
                <label class="form-label">Picture</label>
                <input type="file" class="form-control shadow-none">
            </div>
            <div class="col-md-12 mb-3">
        <label class="form-label">Address</label>
        <textarea class="form-control shadow-none" rows="2"></textarea>
    </div>
    
    <div class="col-md-6 ps-0 mb-3">
        <label class="form-label">Pincode</label>
        <input type="number" class="form-control shadow-none">
    </div>
    
    <div class="col-md-6 pe-0 mb-3">
        <label class="form-label">Date of Birth</label>
        <input type="date" class="form-control shadow-none">
    </div>
    
    <div class="col-md-6 ps-0 mb-3">
        <label class="form-label">Password</label>
        <input type="password" class="form-control shadow-none">
    </div>
    
    <div class="col-md-6 pe-0 mb-3">
        <label class="form-label">Confirm Password</label>
        <input type="password" class="form-control shadow-none">
    </div>
        </div>
    </div>


  </div>
  <div class="text-center my-3">
    <button type="submit" class="btn btn-dark shadow-none px-4 py-2">REGISTER</button>
</div>
      
      </div> 
      </form>
    </div>

  </div>
</div>

<div class="modal fade" id="LoginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form>
      <div class="modal-header" >
      <h5 class="modal-title"> <i class="bi bi-person-circle fs-3 me-2 align-items-center"></i>User Login</h5>
        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="form-group">
    <label class="form-label" >Email address</label>
    <input type="email" class="form-control"  >
      </div>
      <div class="form-group">
    <label class="form-label" >Password</label>
    <input type="password" class="form-control"  >
      </div>
      <div class="d-flex align-items-center justify-content-between mb-2">
    <button type="submit" class="btn me-lg-4 btn-dark shadow-none">LOGIN</button>
    <a href="javascript:void(0)" class="text-secondary text-decoration-none">Forgot Password ?</a>
</div>
      </div> 
      </form>
    </div>

  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
            crossorigin="anonymous"></script>
</body>
</html>
