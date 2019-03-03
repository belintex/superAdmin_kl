<?php 
$title="pesan";
include "header.php"; 
?>
          <!--------------------
          START - Top Bar
          -------------------->
          <div class="top-bar color-scheme-transparent d-none">
            <!--------------------
            START - Top Menu Controls
            -------------------->
            <div class="top-menu-controls">
              <div class="element-search autosuggest-search-activator">
                <input placeholder="Start typing to search..." type="text">
              </div>
              <!--------------------
              START - Messages Link in secondary top menu
              -------------------->
              <div class="messages-notifications os-dropdown-trigger os-dropdown-position-left">
                <i class="os-icon os-icon-mail-14"></i>
                <div class="new-messages-count">
                  12
                </div>
                <div class="os-dropdown light message-list">
                  <ul>
                    <li>
                      <a href="#">
                        <div class="user-avatar-w">
                          <img alt="" src="img/avatar1.jpg">
                        </div>
                        <div class="message-content">
                          <h6 class="message-from">
                            John Mayers
                          </h6>
                          <h6 class="message-title">
                            Account Update
                          </h6>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <div class="user-avatar-w">
                          <img alt="" src="img/avatar2.jpg">
                        </div>
                        <div class="message-content">
                          <h6 class="message-from">
                            Phil Jones
                          </h6>
                          <h6 class="message-title">
                            Secutiry Updates
                          </h6>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <div class="user-avatar-w">
                          <img alt="" src="img/avatar3.jpg">
                        </div>
                        <div class="message-content">
                          <h6 class="message-from">
                            Bekky Simpson
                          </h6>
                          <h6 class="message-title">
                            Vacation Rentals
                          </h6>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <div class="user-avatar-w">
                          <img alt="" src="img/avatar4.jpg">
                        </div>
                        <div class="message-content">
                          <h6 class="message-from">
                            Alice Priskon
                          </h6>
                          <h6 class="message-title">
                            Payment Confirmation
                          </h6>
                        </div>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <!--------------------
              END - Messages Link in secondary top menu
              --------------------><!--------------------
              START - Settings Link in secondary top menu
              -------------------->
              <div class="top-icon top-settings os-dropdown-trigger os-dropdown-position-left">
                <i class="os-icon os-icon-ui-46"></i>
                <div class="os-dropdown">
                  <div class="icon-w">
                    <i class="os-icon os-icon-ui-46"></i>
                  </div>
                  <ul>
                    <li>
                      <a href="users_profile_small.html"><i class="os-icon os-icon-ui-49"></i><span>Profile Settings</span></a>
                    </li>
                    <li>
                      <a href="users_profile_small.html"><i class="os-icon os-icon-grid-10"></i><span>Billing Info</span></a>
                    </li>
                    <li>
                      <a href="users_profile_small.html"><i class="os-icon os-icon-ui-44"></i><span>My Invoices</span></a>
                    </li>
                    <li>
                      <a href="users_profile_small.html"><i class="os-icon os-icon-ui-15"></i><span>Cancel Account</span></a>
                    </li>
                  </ul>
                </div>
              </div>
              <!--------------------
              END - Settings Link in secondary top menu
              --------------------><!--------------------
              START - User avatar and menu in secondary top menu
              -------------------->
              <div class="logged-user-w">
                <div class="logged-user-i">
                  <div class="avatar-w">
                    <img alt="" src="img/avatar1.jpg">
                  </div>
                  <div class="logged-user-menu color-style-bright">
                    <div class="logged-user-avatar-info">
                      <div class="avatar-w">
                        <img alt="" src="img/avatar1.jpg">
                      </div>
                      <div class="logged-user-info-w">
                        <div class="logged-user-name">
                          Maria Gomez
                        </div>
                        <div class="logged-user-role">
                          Administrator
                        </div>
                      </div>
                    </div>
                    <div class="bg-icon">
                      <i class="os-icon os-icon-wallet-loaded"></i>
                    </div>
                    <ul>
                      <li>
                        <a href="apps_email.html"><i class="os-icon os-icon-mail-01"></i><span>Incoming Mail</span></a>
                      </li>
                      <li>
                        <a href="users_profile_big.html"><i class="os-icon os-icon-user-male-circle2"></i><span>Profile Details</span></a>
                      </li>
                      <li>
                        <a href="users_profile_small.html"><i class="os-icon os-icon-coins-4"></i><span>Billing Details</span></a>
                      </li>
                      <li>
                        <a href="#"><i class="os-icon os-icon-others-43"></i><span>Notifications</span></a>
                      </li>
                      <li>
                        <a href="#"><i class="os-icon os-icon-signs-11"></i><span>Logout</span></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <!--------------------
              END - User avatar and menu in secondary top menu
              -------------------->
            </div>
            <!--------------------
            END - Top Menu Controls
            -------------------->
          </div>
          <!--------------------
          END - Top Bar
          -------------------->
          <div class="content-i">
            <div class="app-email-w">
              <div class="app-email-i">
                <!--------------------
                START - Email Side menu
                -------------------->
                <div class="ae-side-menu">
                  <div class="aem-head">
                    <a class="ae-side-menu-toggler" href="#"><i class="os-icon os-icon-hamburger-menu-2"></i></a>
                  </div>
                  <ul class="ae-main-menu">
                    <li class="" id="create">
                      <a href="#" data-target="#exampleModal1" data-toggle="modal"><i class="os-icon os-icon-documents-03"></i><span>Create</span></a>
                    </li>
                    <li class="<?php if(@$_GET['page']=="inbox"){echo"active";} ?>" id="inbox">
                      <a href="pesan.php?page=inbox"><i class="os-icon os-icon-phone-21"></i><span>Inbox</span></a>
                    </li>
                  </ul>
                  <div class="ae-labels">
                    <div class="ae-labels-header">
                      <i class="os-icon os-icon-ui-54"></i><span>Labels</span>
                    </div>
                    <a class="ae-label ae-label-red" href="#"><span class="label-pin"></span><span class="label-value">User</span></a><a class="ae-label ae-label-green" href="#"><span class="label-pin"></span><span class="label-value">Organisasi</span></a><a class="ae-label ae-label-blue" href="#"><span class="label-pin"></span><span class="label-value">Pengurus</span></a>
                  </div>
                </div>
                <!--------------------
                END - Email Side menu
                -------------------->
                <div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal fade" id="exampleModal1" role="dialog" tabindex="-1">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                          Cari User atau Organisasi
                        </h5>
                        <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true"> &times;</span></button>
                      </div>
                      <div class="modal-body">
                        <form>
                          <div class="form-group">
                            <label for=""> User/Organisasi</label><input id="search_user" class="form-control" placeholder="Enter User/Organisasi" type="text">
                          </div>
                        </form>
                      </div>
                      <div class="modal-footer">
                        <button class="btn btn-secondary" data-dismiss="modal" type="button"> Close</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!--------------------
                START - Email Messages List
                -------------------->
                <div class="ae-list-w inbox">
                  <div class="ael-head">
                    <div class="actions-left">
                      <select>
                        <option>
                          Sort by date
                        </option>
                      </select>
                    </div>
                    <div class="actions-right">
                      <a href="#"><i class="os-icon os-icon-ui-37"></i></a><a href="#"><i class="os-icon os-icon-grid-18"></i></a>
                    </div>
                  </div>
                  <div class="ae-list">
                    <div class="ae-item with-status  status-green">
                      <div class="aei-image">
                        <div class="user-avatar-w">
                          <img alt="" src="img/avatar1.jpg">
                        </div>
                      </div>
                      <div class="aei-content">
                        <div class="aei-timestamp">
                          1:25pm
                        </div>
                        <h6 class="aei-title">
                          James Morgan
                        </h6>
                        <div class="aei-sub-title">
                          Create new profile request
                        </div>
                        <div class="aei-text">
                          When the equation, first to ability the forwards, the a but travelling
                        </div>
                      </div>
                    </div>
                    <div class="ae-item with-status  status-green">
                      <div class="aei-image">
                        <div class="user-avatar-w">
                          <img alt="" src="img/avatar2.jpg">
                        </div>
                      </div>
                      <div class="aei-content">
                        <div class="aei-timestamp">
                          11:12am
                        </div>
                        <h6 class="aei-title">
                          Kyle Jefferson
                        </h6>
                        <div class="aei-sub-title">
                          Document Verification
                        </div>
                        <div class="aei-text">
                          When the equation, first to ability the forwards, the a but travelling
                        </div>
                      </div>
                    </div>
                    <div class="ae-item with-status active status-red">
                      <div class="aei-image">
                        <div class="user-avatar-w">
                          <img alt="" src="img/avatar3.jpg">
                        </div>
                      </div>
                      <div class="aei-content">
                        <div class="aei-timestamp">
                          9:07am
                        </div>
                        <h6 class="aei-title">
                          Matt Wallas
                        </h6>
                        <div class="aei-sub-title">
                          Booking Confirmation
                        </div>
                        <div class="aei-text">
                          When the equation, first to ability the forwards, the a but travelling
                        </div>
                      </div>
                    </div>
                    <div class="ae-item with-status  status-green">
                      <div class="aei-image">
                        <div class="user-avatar-w">
                          <img alt="" src="img/avatar4.jpg">
                        </div>
                      </div>
                      <div class="aei-content">
                        <div class="aei-timestamp">
                          6:34am
                        </div>
                        <h6 class="aei-title">
                          Kimerley Markson
                        </h6>
                        <div class="aei-sub-title">
                          Your Statement is available
                        </div>
                        <div class="aei-text">
                          When the equation, first to ability the forwards, the a but travelling
                        </div>
                      </div>
                    </div>
                    <div class="ae-item with-status  status-blue">
                      <div class="aei-image">
                        <div class="user-avatar-w">
                          <img alt="" src="img/avatar5.jpg">
                        </div>
                      </div>
                      <div class="aei-content">
                        <div class="aei-timestamp">
                          Yesterday
                        </div>
                        <h6 class="aei-title">
                          Lora Miller
                        </h6>
                        <div class="aei-sub-title">
                          New comment on your blog post
                        </div>
                        <div class="aei-text">
                          When the equation, first to ability the forwards, the a but travelling
                        </div>
                      </div>
                    </div>
                    <div class="ae-item with-status  status-blue">
                      <div class="aei-image">
                        <div class="user-avatar-w">
                          <img alt="" src="img/avatar6.jpg">
                        </div>
                      </div>
                      <div class="aei-content">
                        <div class="aei-timestamp">
                          Yesterday
                        </div>
                        <h6 class="aei-title">
                          Ivan Moskovits
                        </h6>
                        <div class="aei-sub-title">
                          Diagnostics validation
                        </div>
                        <div class="aei-text">
                          When the equation, first to ability the forwards, the a but travelling
                        </div>
                      </div>
                    </div>
                    <div class="ae-item with-status  status-green">
                      <div class="aei-image">
                        <div class="user-avatar-w">
                          <img alt="" src="img/avatar7.jpg">
                        </div>
                      </div>
                      <div class="aei-content">
                        <div class="aei-timestamp">
                          Yesterday
                        </div>
                        <h6 class="aei-title">
                          Sheldon Kooper
                        </h6>
                        <div class="aei-sub-title">
                          Your trial has ended
                        </div>
                        <div class="aei-text">
                          When the equation, first to ability the forwards, the a but travelling
                        </div>
                      </div>
                    </div>
                    <div class="ae-item with-status  status-yellow">
                      <div class="aei-image">
                        <div class="user-avatar-w">
                          <img alt="" src="img/avatar1.jpg">
                        </div>
                      </div>
                      <div class="aei-content">
                        <div class="aei-timestamp">
                          2 days ago
                        </div>
                        <h6 class="aei-title">
                          Mesut Ozil
                        </h6>
                        <div class="aei-sub-title">
                          New comment received
                        </div>
                        <div class="aei-text">
                          When the equation, first to ability the forwards, the a but travelling
                        </div>
                      </div>
                    </div>
                    <div class="ae-item with-status  status-red">
                      <div class="aei-image">
                        <div class="user-avatar-w">
                          <img alt="" src="img/avatar4.jpg">
                        </div>
                      </div>
                      <div class="aei-content">
                        <div class="aei-timestamp">
                          3 days ago
                        </div>
                        <h6 class="aei-title">
                          Andres Iniesta
                        </h6>
                        <div class="aei-sub-title">
                          Certificate is issued
                        </div>
                        <div class="aei-text">
                          When the equation, first to ability the forwards, the a but travelling
                        </div>
                      </div>
                    </div>
                    <div class="ae-item with-status  status-blue">
                      <div class="aei-image">
                        <div class="user-avatar-w">
                          <img alt="" src="img/avatar5.jpg">
                        </div>
                      </div>
                      <div class="aei-content">
                        <div class="aei-timestamp">
                          Yesterday
                        </div>
                        <h6 class="aei-title">
                          Lora Miller
                        </h6>
                        <div class="aei-sub-title">
                          New comment on your blog post
                        </div>
                        <div class="aei-text">
                          When the equation, first to ability the forwards, the a but travelling
                        </div>
                      </div>
                    </div>
                    <div class="ae-item with-status  status-blue">
                      <div class="aei-image">
                        <div class="user-avatar-w">
                          <img alt="" src="img/avatar6.jpg">
                        </div>
                      </div>
                      <div class="aei-content">
                        <div class="aei-timestamp">
                          Yesterday
                        </div>
                        <h6 class="aei-title">
                          Ivan Moskovits
                        </h6>
                        <div class="aei-sub-title">
                          Diagnostics validation
                        </div>
                        <div class="aei-text">
                          When the equation, first to ability the forwards, the a but travelling
                        </div>
                      </div>
                    </div>
                    <div class="ae-item with-status  status-green">
                      <div class="aei-image">
                        <div class="user-avatar-w">
                          <img alt="" src="img/avatar7.jpg">
                        </div>
                      </div>
                      <div class="aei-content">
                        <div class="aei-timestamp">
                          Yesterday
                        </div>
                        <h6 class="aei-title">
                          Sheldon Kooper
                        </h6>
                        <div class="aei-sub-title">
                          Your trial has ended
                        </div>
                        <div class="aei-text">
                          When the equation, first to ability the forwards, the a but travelling
                        </div>
                      </div>
                    </div>
                    <div class="ae-item with-status  status-yellow">
                      <div class="aei-image">
                        <div class="user-avatar-w">
                          <img alt="" src="img/avatar1.jpg">
                        </div>
                      </div>
                      <div class="aei-content">
                        <div class="aei-timestamp">
                          2 days ago
                        </div>
                        <h6 class="aei-title">
                          Mesut Ozil
                        </h6>
                        <div class="aei-sub-title">
                          New comment received
                        </div>
                        <div class="aei-text">
                          When the equation, first to ability the forwards, the a but travelling
                        </div>
                      </div>
                    </div>
                    <div class="ae-item with-status  status-green">
                      <div class="aei-image">
                        <div class="user-avatar-w">
                          <img alt="" src="img/avatar2.jpg">
                        </div>
                      </div>
                      <div class="aei-content">
                        <div class="aei-timestamp">
                          1 week ago
                        </div>
                        <h6 class="aei-title">
                          Anthony Tailor
                        </h6>
                        <div class="aei-sub-title">
                          Create new profile request
                        </div>
                        <div class="aei-text">
                          When the equation, first to ability the forwards, the a but travelling
                        </div>
                      </div>
                    </div>
                  </div>
                  <a class="ae-load-more" href="#"><span>Load More Messages</span></a>
                </div>
                <!--------------------
                END - Email Messages List
                -------------------->
                <div class="ae-content-w inbox">
                  <!--------------------
                  START - Email Content Header
                  -------------------->
                  <div class="aec-head">
                    <div class="actions-left">
                      <a class="highlight" href="#"><i class="os-icon os-icon-ui-02"></i></a>
                    </div>
                    <div class="actions-right">
                      <div class="aeh-actions">
                        <a class="separate" href="#"><i class="os-icon os-icon-ui-15"></i></a>
                        <a href="#"><i class="os-icon os-icon-common-07"></i></a>
                        <a href="#"><i class="os-icon os-icon-mail-19"></i></a>
                      </div>
                      <div class="user-avatar">
                        <img alt="" src="img/avatar3.jpg">
                      </div>
                    </div>
                  </div>
                  <!--------------------
                  END - Email Content Header
                  --------------------><!--------------------
                  START - Email Content
                  -------------------->
                  <div class="ae-content">
                    <div class="older-pack">
                      <div class="aec-full-message-w">
                        <div class="aec-full-message">
                          <div class="message-head">
                            <div class="user-w with-status status-green">
                              <div class="user-avatar-w">
                                <div class="user-avatar">
                                  <img alt="" src="img/avatar1.jpg">
                                </div>
                              </div>
                              <div class="user-name">
                                <h6 class="user-title">
                                  Bryan Kinskey
                                </h6>
                                <div class="user-role">
                                  Registration Question<span>< bryan@solutions.com ></span>
                                </div>
                              </div>
                            </div>
                            <div class="message-info">
                              February 7th, 2017<br>2:27pm
                            </div>
                          </div>
                          <div class="message-content">
                            Greetings Bryan,<br><br>Classes of there been temple. Rung quite head the may devious usual. A century thing if but support turn start he a subject if what live was become write that suspicion case fundamentals office his her. Earnestly a the and on a phase samples examples, tone.<br><br>Regards,<br>Mike Mayers
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="aec-full-message-w show-pack">
                      <div class="more-messages">
                        7 Earlier Messages
                      </div>
                      <div class="aec-full-message">
                        <div class="message-head">
                          <div class="user-w with-status status-green">
                            <div class="user-avatar-w">
                              <div class="user-avatar">
                                <img alt="" src="img/avatar1.jpg">
                              </div>
                            </div>
                            <div class="user-name">
                              <h6 class="user-title">
                                John Mayers
                              </h6>
                              <div class="user-role">
                                Account Manager<span>< john@solutions.com ></span>
                              </div>
                            </div>
                          </div>
                          <div class="message-info">
                            January 12th, 2017<br>1:24pm
                          </div>
                        </div>
                        <div class="message-content">
                          Hi Mike,<br><br>When the equation, first to ability the forwards, the a but travelling, outlines sentinels bad expand to goodness. Behind if have at the even I and how work, completely deference who boss actually designer; Monstrous with geared from far and these, morals, phase rome; Class. Called get amidst of next.<br><br>Regards,<br>Mike Mayers
                          <div class="message-attachments">
                            <div class="attachments-heading">
                              Attachments
                            </div>
                            <div class="attachments-docs">
                              <a href="#"><i class="os-icon os-icon-ui-51"></i><span>Excel Document</span></a><a href="#"><i class="os-icon os-icon-documents-07"></i><span>Image File</span></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="aec-reply">
                      <div class="reply-header">
                        <h5>
                          Reply to <span>John Mayers</span>
                        </h5>
                      </div>
                      <textarea cols="80" id="ckeditorEmail" name="ckeditor1" rows="5"></textarea>
                      <div class="buttons-w">
                        <div class="actions-left">
                          <a class="btn btn-link" href="#"><i class="os-icon os-icon-ui-51"></i><span>Add Attachment</span></a>
                        </div>
                        <div class="actions-right">
                          <a class="btn btn-success" href="#"><i class="os-icon os-icon-mail-18"></i><span>Send Message</span></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--------------------
                  END - Email Content
                  -------------------->
                </div>
              </div>
            </div>
          
          </div>
        </div>
      </div>
      <div class="display-type"></div>
    </div>
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/popper.js/dist/umd/popper.min.js"></script>
    <script src="bower_components/moment/moment.js"></script>
    <script src="bower_components/chart.js/dist/Chart.min.js"></script>
    <script src="bower_components/select2/dist/js/select2.full.min.js"></script>
    <script src="bower_components/jquery-bar-rating/dist/jquery.barrating.min.js"></script>
    <script src="bower_components/ckeditor/ckeditor.js"></script>
    <script src="bower_components/bootstrap-validator/dist/validator.min.js"></script>
    <script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="bower_components/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>
    <script src="bower_components/dropzone/dist/dropzone.js"></script>
    <script src="bower_components/editable-table/mindmup-editabletable.js"></script>
    <script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
    <script src="bower_components/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"></script>
    <script src="bower_components/tether/dist/js/tether.min.js"></script>
    <script src="bower_components/slick-carousel/slick/slick.min.js"></script>
    <script src="bower_components/bootstrap/js/dist/util.js"></script>
    <script src="bower_components/bootstrap/js/dist/alert.js"></script>
    <script src="bower_components/bootstrap/js/dist/button.js"></script>
    <script src="bower_components/bootstrap/js/dist/carousel.js"></script>
    <script src="bower_components/bootstrap/js/dist/collapse.js"></script>
    <script src="bower_components/bootstrap/js/dist/dropdown.js"></script>
    <script src="bower_components/bootstrap/js/dist/modal.js"></script>
    <script src="bower_components/bootstrap/js/dist/tab.js"></script>
    <script src="bower_components/bootstrap/js/dist/tooltip.js"></script>
    <script src="bower_components/bootstrap/js/dist/popover.js"></script>
    <script src="js/demo_customizer.js?version=4.4.0"></script>
    <script src="js/main.js?version=4.4.0"></script>
    <script type="text/javascript">
    $(document).ready(function(){
      $('#search_user').on('keyup',function(){

      });
    });
    </script>
  </body>
</html>
