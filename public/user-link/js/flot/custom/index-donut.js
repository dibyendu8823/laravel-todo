var $border_color="#ccc",$grid_color="#ccc",$default_black="#666",$primary="#6a55c2",$info="#53ACDF",$danger="#e94b3b",$warning="#ffb61c",$success="#76bf46",$yellow="#ffee00",$facebook="#3b5999",$twitter="#00acee",$linkedin="#1a85bd",$gplus="#dc4937",$cool_one="#7764a2",$cool_two="#145b9b",$cool_three="#00a4be",$cool_four="#45a989",$cool_five="#588ba4",$cool_six="#b2a7d0",$cool_seven="#67aadf",$cool_eight="#7bc1d8",$cool_nine="#89c1a2",$cool_ten="#8bb9d6";$(function(){var o,a;o=[{label:"",data:Math.floor(100*Math.random()+140)},{label:"",data:Math.floor(100*Math.random()+30)},{label:"",data:Math.floor(100*Math.random()+60)},{label:"",data:Math.floor(100*Math.random()+90)},{label:"",data:Math.floor(100*Math.random()+120)}],a={series:{pie:{show:!0,innerRadius:.6,stroke:{width:1}}},shadowSize:0,legend:{position:"sw"},tooltip:!0,tooltipOpts:{content:"%s: %y"},grid:{hoverable:!0,clickable:!1,borderWidth:0},shadowSize:0,colors:[$cool_six,$cool_one,$cool_three,$cool_five,$cool_seven,$cool_eight]};var e=$("#donut-chart");e.length&&$.plot(e,o,a)});