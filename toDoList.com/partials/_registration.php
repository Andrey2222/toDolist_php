 <section class="form-section hidden" id="registration">
            <p>Registration</p>
            <form action="engines/registration.php" method="post">
            <div class="input-group form-group">
              <label for="email">Email</label>
              <input class="form-control" type="text" id="email" name="email" placeholder="Enter email">
              <div class="errors">One error</div>
            </div>
            <div class="input-group form-group">
              <label for="password">Password</label>
              <input class="form-control" type="password" id="password" name="password" placeholder="Enter password">
              <div class="errors">One error</div>
            </div>
            <div class=" input-group form-group">
              <label for="confirm-password">Confirm password</label>
              <input class="form-control" type="password" id="confirm_password" name="confirm_password" placeholder="Confirm password">
              <div class="errors">One error</div>
            </div>
            <button type="submit" class="btn btn-primary action-button" id="registration_submit" name="button">Sign up</button>
            </form>
        </section>