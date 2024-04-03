<!-- Button trigger modal -->
<!-- Modal -->
<style>
    #jobPost_jobDescription,
    #jobPost_jobQualification {
        width: 100%;
        height: 300px;
        /* Set a minimum height to avoid collapsing when empty */
        resize: none;
        padding: 10px 20px;
    }
</style>
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <div class="title-con">
                    <h1 class="modal-title job-role text-capitalize" id="staticBackdropLabel"><i
                            ></i><span class="d-inline" id="jobPost_jobRole"></span></h1>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="job-post-container container-fluid">
                    <div class="text-center img-thumbnail d-flex align-items-center mx-auto" id="jobImage_container">
                        <img src="assets/images/about-banner.jpg" class="w-100" alt="Tour Package Picture"
                            id="jobPost_jobImage">
                    </div>
                    <p class="location"> <i class="fa-solid fa-clock"></i><span class="d-inline"
                            id="jobPost_jobType"></span></p>
                    <p class="job-type"></p>
                    <p class="date-created"><i class="fa-regular fa-calendar"></i><span class="d-inline"
                            id="jobPost_jobDateCreated"></span></p>
                    <!-- <p class="salary"><i class="fa-solid fa-hand-holding-dollar"></i>$100,000</p> -->
                    <p class="job-description">
                        <span class="job-span font-weight-bold">Description</span>
                        <textarea id="jobPost_jobDescription" readonly></textarea>
                    </p>


                    <p class="qualification">
                        <span class="job-span font-weight-bold">Inclusion & Exclusion:</span>
                        <textarea class="d-inline" id="jobPost_jobQualification" readonly></textarea>
                    </p>

                </div>
            </div>
            <div class="modal-footer">
                <input type="hidden" id="jobPost_id" class="form-control" required>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="https://docs.google.com/forms/d/e/1FAIpQLScN1s_EssPS6nZD2QVGtvkiAdTZhDNYBkfa4Iw8lHBK1_l8yg/viewform" type="button" class="btn btn-primary" target="_blank">Book Now</a>
            </div>
        </div>
    </div>
</div>

<script>
    $('#applyBtn').on('click', function () {
        let jobPostId = $('#jobPost_id').val();
        let applicationPageUrl = 'application-page.php?jobPost_id=' + encodeURIComponent(jobPostId);
        window.location.href = applicationPageUrl;
    });
</script>