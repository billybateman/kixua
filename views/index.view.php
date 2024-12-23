<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<style>
   .checkmark-wrapper {
      display: flex;
      justify-content: center;
      align-items: center;
      margin-top: 20px;
   }
   .checkmark {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      background-color: #28a745;
      display: flex;
      justify-content: center;
      align-items: center;
      animation: pop-in 0.5s ease-out forwards;
   }
   .checkmark-icon {
      font-size: 50px;
      color: white;
   }
   @keyframes pop-in {
      0% {
            transform: scale(0);
      }
      100% {
            transform: scale(1);
      }
   }
   .next-steps {
      margin-top: 20px;
   }
</style>

<div class="container mt-5">
   <!-- Success Message -->
   <div class="alert alert-success text-center" role="alert">
      <h4 class="alert-heading">Setup Complete!</h4>
      <p>Your web application has been successfully set up. You can now start building your application by following the next steps.</p>
   </div>

   <!-- Animated Checkmark -->
   <div class="checkmark-wrapper">
      <div class="checkmark">
            <i class="fas fa-check checkmark-icon"></i>
      </div>
   </div>

   <!-- Checklist -->
   <div class="next-steps">
      <h5>Next Steps:</h5>
      <ul class="list-group">
            <li class="list-group-item">
               <i class="fas fa-code"></i> <a href="#">Create a Controller</a> - Define your application logic.
            </li>
            <li class="list-group-item">
               <i class="fas fa-database"></i> <a href="#">Create a Model</a> - Design your database schema.
            </li>
            <li class="list-group-item">
               <i class="fas fa-eye"></i> <a href="#">Create a View</a> - Build your user interface.
            </li>
            <li class="list-group-item">
               <i class="fas fa-envelope"></i> <a href="#">Create an Email Template</a> - Prepare your email notifications.
            </li>
            <li class="list-group-item">
               <i class="fas fa-play"></i> <a href="#">Run Migrations</a> - Apply your database changes.
            </li>
            <li class="list-group-item">
               <i class="fas fa-sync-alt"></i> <a href="#">Run Composer Update</a> - Update your dependencies.
            </li>
      </ul>
   </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
