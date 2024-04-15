
                                <!-- START OF APPROVE OR DENY FORM  -->
                                <form method="post" action="admin_page/users/approve_or_deny_user.php">
                                  <!-- Hidden input field to store user ID -->
                                  <div class="form-group">
                                    <input type="text" class="form-control p-input" id="userId" value="<?php echo $userData['id']; ?>" name="userId" hidden>
                                  </div>

                                  <!-- Condition to hide buttons if user status is "Approved" -->
                                  <?php if ($userData['status'] !== 'Approved'): ?>
                                  <div class="form-group">
                                    <button type="submit" class="btn btn-success mr-2" name="approve">Approve</button>
                                    <button type="submit" class="btn btn-danger" name="deny">Deny</button>
                                  </div>
                                  <?php endif; ?>
                                </form>
                                <!-- END OF APPROVE OR DENY FORM  -->