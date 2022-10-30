<style>
    .collapse{
        background-color: rgba(255, 249, 253, 0.233);
    }
</style>


<div  class="collapse px-4 pb-4 card bg-gradient" id="changePassWord">
        
        <input type="hidden" value="{{ $accinfos->password }}" class="form-control" name="oldpassword" id="oldpassword" placeholder="Enter old password"
            readonly>


    <div class="pt-3">
        <label for="oldpassword" class="form-label">Old password</label>
        <input type="password" class="form-control" name="oldpassword" id="oldpassword" placeholder="Enter old password"
            required>

    </div>
    <div class="pt-3">
        <label for="newpassword" class="form-label">New password</label>
        <input type="password" class="form-control" name="newpassword" id="newpassword" placeholder="Enter new password"
            required>
    </div>

    <div class="pt-3">
        <label for="confirmedpassword" class="form-label">Confirmed password</label>
        <input type="password" class="form-control" name="confirmedpassword" id="confirmedpassword"
            placeholder="Enter confirmed password" required>
    </div>
    <div class="pt-3">
        <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false"
            aria-controls="collapseExample">
            Change
        </a>
        <a class="btn btn-secondary" id="closeChange" data-bs-toggle="collapse" href="#changePassWord" role="button"
            aria-expanded="false" aria-controls="changePassWord">
            Close
        </a>

    </div>

    <div class="mt-3">
        <span class="text-danger">
            Please <span class="text-secondary fw-bolder">close</span> for continue to edit your information
        </span>
    </div>


</div>