        <section class="form-section" id="authorization">
            <p>Authorization</p>
            <form action="engines/authorization.php" method="post">
            <div class="input-group form-group">
              <label for="login_email">Email</label>
              <input class="form-control" type="text" name="login_email" id="login_email" placeholder="Enter email">
              <div class="errors">One error</div>
            </div>
            <div class="input-group form-group">
              <label for="login_password">Password</label>
              <input class="form-control" type="password" name="login_password" id="login_password" placeholder="Enter password">
              <div class="errors">One error</div>
            </div>

            <button type="submit" class="btn btn-primary action-button" id="authorization_submit" name="button">Authorize</button>
          </form>
        </section>