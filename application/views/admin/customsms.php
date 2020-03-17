<div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Custom Message</h1>

          <div class="row">

            <div class="col">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                    <h6 class="m-0 text-primary">Compose Message</h6>
                    </div>
                    <div class="card-body">
                        <form method="POST" enctype="multipart/form-data" action="<?php echo base_url(); ?>sendsms">
                            <div>
                            <h7 class="m-0 text-info">Recipients:</h7>
                            </div>
                            <div class="row">
                                
                                    <div class="col-xl-3">
                                        <i class="fas fa-user"></i>
                                        <label for="contact">Single Contact</label>
                                        <input type="text" id="singleContact" name="singleContact" class="form-control" maxlength="10" placeholder="e.g 0712345678">
                                    </div>
                                    <div class="col-xl-3">
                                        <i class="fas fa-file-upload"></i>
                                        <label for="contact">Upload Contacts</label>
                                        <input type="file" id="contactFile" name="contactFile" class="form-control">
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="my-2"></div>
                                        <a href="#" class="btn btn-primary btn-icon-split btn-sm">
                                            <span class="icon text-white-50">
                                            <i class="fas fa-share-square"></i>
                                            </span>
                                            <span class="text">Send to all contacts</span>
                                        </a>
                                        <div class="my-2"></div>
                                        <a href="#" class="btn btn-primary btn-icon-split btn-sm">
                                            <span class="icon text-white-50">
                                            <i class="fas fa-users"></i>
                                            </span>
                                            <span class="text">Send to a group</span>
                                        </a>
                                        <label>No Groups Selected</label>
                                    </div>
                                
                            </div>
                            <div>
                            <h7 class="m-0 text-info">Message</h7>
                            </div>
                            <div class="form-group">
                                <div class="col-xl-8">
                                    <div class="md-form">
                                    <i class="fas fa-pencil-alt prefix"></i>
                                    <textarea id="form22" name="message" class="md-textarea form-control" rows="5" style="border: 1px solid #186dd6" placeholder="Type message here..."></textarea>
                                    </div>
                                    <span class="text-danger"><?php echo form_error('message'); ?></span>
                                </div>
                                <div class="col-xl-4">
                                <div class="my-2"></div>
                                    <a href="javascript:$('form').submit();" name="send" class="btn btn-primary btn-icon-split btn-sm">
                                            <span class="icon text-white-50">
                                            <i class="fas fa-paper-plane"></i>
                                            </span>
                                            <span class="text">Send</span>
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

    </div>
</div>  