        <section class="form-section" id="authorization">
            <h1>Authorization</h1>
            <form action="engines/authorization.php" method="post">
            <div class="form-group">
              <label for="login_email">Email</label>
              <input type="text" name="login_email" id="login_email" placeholder="Enter email">
              <div class="errors">One error</div>
            </div>
            <div class="form-group">
              <label for="login_password">Password</label>
              <input type="password" name="login_password" id="login_password" placeholder="Enter password">
              <div class="errors">One error</div>
            </div>

            <button type="submit" class="action-button" id="authorization_submit" name="button">Authorize</button>
          </form>
        </section>