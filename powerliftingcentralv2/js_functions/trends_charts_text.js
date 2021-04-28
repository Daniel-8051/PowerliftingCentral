// changes text beneath graph based on the button clikced
var graph_text = document.getElementById('graph_explanation');
var participation_text = "Popularity, despite the lack of substantial financial reward confirms this is a sport based on passion, enjoyment and love. Popularity within the UK & Ireland has seen a steady increase in participation levels across the years from 2013 to recent years of 2018.";
graph_text.innerHTML = participation_text;

$('#0').click(function() {
    var graph_text = document.getElementById('graph_explanation');
    var participation_text = "Popularity, despite the lack of substantial financial reward confirms this is a sport based on passion, enjoyment and love.Popularity within the UK & Ireland has seen a steady increase in participation levels across the years from 2013 to recent years of 2018. ";
    graph_text.innerHTML = participation_text;

});
$('#1').click(function() {
    var graph_text = document.getElementById('graph_explanation');
    var male_female_wilks = "A woman weighing 120lbs (54.4kg) squatting 400lbs (181.5kg) gets 218.29 Wilks points. For a man weighing 220lbs (99.8kg), he would need to squat 791lbs (359kg) to earn 218.54 Wilks points in order to considered stronger according to the Wilks formula. A male and a female lifter weighing the same 160lbs/72.5kg, registering a total of 500lbs/227kg would score respectively 165 Wilks points (male) and 220 Wilks points (female). So even though the weight of the lifters and the weight they lifted is the same, their Wilks score is very different, because men are statistically stronger than women. What is considered a good score for a woman is not for a man, for biological reasons.";
    graph_text.innerHTML = male_female_wilks;

});
$('#2').click(function() {
    var graph_text = document.getElementById('graph_explanation');
    var male_wilks_per_weight_class = "In this sample of athletes, Wilks score seemed pretty consistent across the 66kg-120kg weight classes at around 350. There is a noticable drop of in Wilks score in the lighter 53kg & 59kg weight classes and a significant rise in the heavier 120+kg mens weight class. This would coincide with the common knowledge that the more mass/ muscle a lifter has, the stronger they are.";
    graph_text.innerHTML = male_wilks_per_weight_class;

});
$('#3').click(function() {
    var graph_text = document.getElementById('graph_explanation');
    var female_wilks_per_weight_class = "FEMALE WILKS PER WEIGHT CLASS TEXT";
    graph_text.innerHTML = female_wilks_per_weight_class;

});