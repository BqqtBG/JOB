<div class="row center-xs">
    <div class="col-xs-6">
        <?php  //echo jobController::printJobs(); 
        $result = jobModel::getJobs();
        foreach ($result as $item => $jobs): ?>
        <div class = 'job_tittle'>
       <p class="right" style="visibility: hidden;"> <?php echo $jobs["id"]; ?> </p>
        <br>
        <p class = 'findjob_box'> <?php echo $jobs["job_name"]; ?> </p>
        <br>
        <p class = 'findjob_box'> <?php echo $jobs["information"]; ?> </p>
        <br>
        <p class = 'findjob_box'> <?php echo $jobs['requirements']; ?> </p>
        <br>
        <p class = 'findjob_box'> <?php echo $jobs['sallary']; ?>лв. </p>
        </div>
        <?php endforeach?>     
    </div>
</div>>
    
