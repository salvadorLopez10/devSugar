<?php
 // created: 2017-12-26 15:28:57
$dictionary['Opportunity']['fields']['date_closed_timestamp']['audited']=false;
$dictionary['Opportunity']['fields']['date_closed_timestamp']['duplicate_merge']='enabled';
$dictionary['Opportunity']['fields']['date_closed_timestamp']['duplicate_merge_dom_value']=1;
$dictionary['Opportunity']['fields']['date_closed_timestamp']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['date_closed_timestamp']['formula']='rollupMax($revenuelineitems, "date_closed_timestamp")';

 ?>