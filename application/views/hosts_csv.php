<div class="container">
    <h2>Hosts
        <small>CSV Import & Export</small>
    </h2>


    <div class="row">
        <div class="col-sm-8" text-right>
        </div>
        <div class="col-sm-4" text-right>
            <button class="btn btn-success" onclick="location.href='<?php echo site_url('hosts/') ?>'">
                <i class="glyphicon glyphicon-backward"></i> Return Hosts
            </button>
        </div>
    </div>


    <br/>
    <br/>
    <div class="row">
        <div class="col-sm-1">
        </div>
        <div class="col-sm-2">
            <p class="lead">Import from CSV</p>
            <p>Add CSV to the last line</p>
        </div>
        <div class="col-sm-9">
            <?php if (isset($error)): ?>
                <div class="alert alert-error"><?php echo $error; ?></div>
            <?php endif; ?>
            <?php if ($this->session->flashdata('success') == TRUE): ?>
                <div class="alert alert-success"><?php echo $this->session->flashdata('success'); ?></div>
            <?php endif; ?>

            <form method="post" action="<?php echo base_url() ?>hosts/import_csv" enctype="multipart/form-data">
                <input type="file" name="userfile"><br><br>
                <input type="submit" name="submit" value="Start Import from CSV" class="btn btn-primary">
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-2">
        </div>
        <div class="col-sm-6">
            <p>CSV Example</p>
            <pre>
"ip_address","subnet_mask","host","note","public_ip","state","spec"
"10.0.0.1","255.255.255.0","test-l3","L3SW","xx.xx.xx.xx","Running","1Gbps"
"10.0.0.3","255.255.255.0","test-host2","bbbb","xx.xx.xx.xx","Running","CPU:2Core, Memory:2G, Disk:10G"
"10.0.0.4","255.255.255.0","test-host3","bbbb","xx.xx.xx.xx","Running","CPU:2Core, Memory:2G, Disk:10G"
"10.0.0.5","255.255.255.0","test-host4","bbbb","xx.xx.xx.xx","Running","CPU:2Core, Memory:2G, Disk:10G"
"10.0.0.6","255.255.255.0","test-host5","bbbb","xx.xx.xx.xx","Running","CPU:2Core, Memory:2G, Disk:10G"
            </pre>
            <ul>
                <li>hosts column must be not null and unique.</li>
                <li>CSV Import isn't work validation.</li>
            </ul>
        </div>
    </div>

    <br/>
    <br/>
    <br/>
    <br/>

    <div class="row">
        <div class="col-sm-1">
        </div>
        <div class="col-sm-2">
            <p class="lead">Export to CSV</p>
        </div>
        <div class="col-sm-9">
            <form name="export_data" id="export_data" method="post"
                  action="<?php echo base_url("hosts/export_csv"); ?>">
                <button class="btn btn-primary pull-left">Start Export to CSV</button>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-2">
        </div>
        <div class="col-sm-6">
            <p>CSV Example</p>
            <pre>
"ip_address","subnet_mask","host","note","public_ip","state","spec"
"10.0.0.1","255.255.255.0","test-l3","L3SW","xx.xx.xx.xx","Running","1Gbps"
"10.0.0.3","255.255.255.0","test-host2","bbbb","xx.xx.xx.xx","Running","CPU:2Core, Memory:2G, Disk:10G"
"10.0.0.4","255.255.255.0","test-host3","bbbb","xx.xx.xx.xx","Running","CPU:2Core, Memory:2G, Disk:10G"
"10.0.0.5","255.255.255.0","test-host4","bbbb","xx.xx.xx.xx","Running","CPU:2Core, Memory:2G, Disk:10G"
"10.0.0.6","255.255.255.0","test-host5","bbbb","xx.xx.xx.xx","Running","CPU:2Core, Memory:2G, Disk:10G"
            </pre>
        </div>
    </div>


    <br/>
    <br/>
    <br/>
    <br/>
    <div class="row">
        <div class="col-sm-1">
        </div>
        <div class="col-sm-2">
            <p class="lead">Purge Table</p>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-2">
        </div>
        <div class="col-sm-6">
            <p>I'm not preparing to purge table from the Web.<br>
                If you want to purge table, you use SQLite database manager or execute the following command in Linux
            </p>
            <pre>
SQLite> DELETE FROM HOSTS;
SQLite> VACUUM;
            </pre>
        </div>
    </div>

</div>
