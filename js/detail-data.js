var txt = '{"employees":[' +  
        '{"firstName":"Bill","lastName":"Gates" },' +  
        '{"firstName":"超級抗氧化植物 － 「紐西蘭松樹皮」","lastName":"Bush紐西蘭松樹皮是由Canterbury University 科學院院長Dr. Kelvin Duncan 博士帶領的專家經研究人體營養多年後在位受環境污染的紐西蘭大自然底下發現對人體健康有極大幫助的天然松樹皮。研究小組發現PinusRadiata是一種獨特又珍貴的樹種，當樹齡達25～30年才砍伐並只取成熟樹幹下的1/3處樹皮，經由獨特的萃取加工法只使用紐西蘭純淨水而非有機溶劑，順利提取出幫助人類延年益壽的最佳抗氧化劑～Enzogenol（松樹醇）。Enzogenol（松樹醇）含有高達2000多種化合物，包含眾所周知的黃酮類、兒茶素，其中原花青素是Enzogenol裡最豐富的複合多酚類物質。" },' +  
        '{"firstName":"Thomas","lastName":"Carter" }]}';  
// var txt = '/assets/detail-text';

// var obj = eval ("(" + txt + ")");  
// var obj = eval ("(" + txt + ")");  
var obj = JSON.parse(txt);  

// document.getElementById("detail-title").innerHTML=obj.employees[1].firstName;   
// document.getElementById("detail-content").innerHTML=obj.employees[1].lastName;  

$('#detail-title').append(obj.employees[1].firstName) ;