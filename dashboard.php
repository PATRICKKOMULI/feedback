<?php include_once 'header.php';?>

    <div class="row-fluid">
      <div class="widget-box">
        <div class="widget-title"><span class="icon"><i class="icon-tasks"></i></span>
          <h5>Feedback Analytics</h5>
          <div class="buttons"><a href="#" class="btn btn-mini btn-success"><i class="icon-refresh"></i> Update stats</a></div>
        </div>
        <div class="widget-content">
          <div class="row-fluid">
            <div class="span8">
              <div class="chart"></div>
            </div>
            <div class="span4">
              <ul class="stat-boxes2">
                <li>
                  <div class="left peity_bar_neutral"><span><span style="display: none;">2,4,9,7,12,10,12</span>
                    <canvas width="50" height="24"></canvas>
                    </span>+10%</div>
                  <div class="right"> <strong>15598</strong> Passives </div>
                </li>
                <li>
                  <div class="left peity_line_neutral"><span><span style="display: none;">10,15,8,14,13,10,10,15</span>
                    <canvas width="50" height="24"></canvas>
                    </span>10%</div>
                  <div class="right"> <strong>150</strong> detractors </div>
                </li>
                <li>
                  <div class="left peity_bar_bad"><span><span style="display: none;">3,5,6,16,8,10,6</span>
                    <canvas width="50" height="24"></canvas>
                    </span>-40%</div>
                  <div class="right"> <strong>4560</strong> Promoters</div>
                </li>
                <li>
                  <div class="left peity_line_good"><span><span style="display: none;">12,6,9,13,14,10,17</span>
                    <canvas width="50" height="24"></canvas>
                    </span>+60%</div>
                  <div class="right"> <strong>936</strong> All</div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <hr>

    
  </div>
  <?php include_once 'footer.php';?>