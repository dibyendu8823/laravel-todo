var $border_color="#ccc",$grid_color="#ccc",$default_black="#666",$cool_one="#7764a2",$cool_two="#145b9b",$cool_three="#00a4be",$cool_four="#45a989",$cool_five="#588ba4",$cool_six="#b2a7d0",$cool_seven="#67aadf",$cool_eight="#7bc1d8",$cool_nine="#89c1a2",$cool_ten="#8bb9d6";$(function(){var o,l,c=[];c.push([[1700,1],[3400,2],[2300,3],[4500,4],[6300,5]]),c.push([[1300,1],[1200,2],[2900,3],[2300,4],[4500,5]]),c.push([[800,1],[1900,2],[1200,3],[2100,4],[3800,5]]),o=[{label:"Foursquare",data:c[1]},{label:"Twitter",data:c[0]},{label:"Google plus",data:c[2]}],l={xaxis:{},grid:{hoverable:!0,clickable:!1,borderWidth:1,tickColor:$border_color,borderColor:$grid_color},shadowSize:0,bars:{horizontal:!0,show:!0,barWidth:20736e4,barWidth:.2,fill:!0,lineWidth:1,order:!0,lineWidth:0,fillColor:{colors:[{opacity:1},{opacity:1}]}},tooltip:!0,tooltipOpts:{content:"%s: %x"},colors:[$cool_ten,$cool_four,$cool_one,$cool_seven,$cool_two,$cool_eight]};var r=$("#horizontal-chart");r.length&&$.plot(r,o,l)});