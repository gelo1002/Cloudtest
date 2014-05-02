$(document).on("ready",init);

function init(){
	$('#ingles').on('click',ingles);
	//$('#resultado').on('click',resultado);
	$('#FrmOffice').on('submit',office);
	$('#FrmCleaver').on('submit',cleaver);

	$('#FrmSupScada').on('submit',Supscada);
	$('#FrmSST').on('submit',sst);
	$('#FrmSupCont').on('submit',supcont);
	$('#FrmSupConCal').on('submit',supconcal);
	$('#FrmOpScada').on('submit',opscada);
	$('#FrmEjeCon').on('submit',econta);
	$('#FrmEjeVen').on('submit',eventas);
	$('#FrmERH').on('submit',erh);
	$('#FrmAS').on('submit',adquisiciones);
	$('#FrmDesign').on('submit',design);
	$('#FrmSSPA').on('submit',sspa);
	$('#FrmPJ').on('submit',junior);
	$('#FrmPS').on('submit',senior);
	$('#FrmAddUsers').on('submit',adduser);	

	$('.btn-info').on('click',getusers);
}

function getusers(ev){
	var item = [];
	item.push({
	"id": $(this).data('id')
	});
	console.log(item);
	$.post("../include/tempo.php",{p:"getusers",datos:JSON.stringify(item)},setTable);
}

function setTable(request){
	console.log(request);
	var r = JSON.parse(request);
	var item = "";
	$("#TbData").empty();
	r.forEach(function(i){
		
		item = "<tr><td>"+i['nombre']+"</td><td>"+i['user']+"</td><td>"+i['acierto_puesto']+"</td><td>"+i['np_puesto']+"</td><td>"+i['acierto_office']+"</td><td>"+i['np_office']+"</td></tr>";
		$("#TbData").append(item);
    });
}

function adduser(ev){
	var item = [];
	ev.preventDefault();
    ev.stopPropagation();
	f = ev.currentTarget;
	item.push({
		
		"nombre": f.nombre.value,
		"puesto": f.Mpuesto.value,
		"user": f.user.value,
		"passwd": f.passwd.value
	});
	console.log(item);
	$.post("include/tempo.php",{p:"addusers",datos:JSON.stringify(item)},resultado);
	
}
function office(ev){
	console.log("entro officexD");
	var item = [];
	ev.preventDefault();
    ev.stopPropagation();
	f = ev.currentTarget;
	
		for (var i = 0; i < f.pregunta1.length; i++) {		
			if (f.pregunta1[i]) {
				if (f.pregunta1[i].checked) {
					p1 = f.pregunta1[i].value;
				};
			};
			if (f.pregunta2[i]) {
				if (f.pregunta2[i].checked) {
					p2 = f.pregunta2[i].value;
				};
			};
			if (f.pregunta3[i]) {
				if (f.pregunta3[i].checked) {
					p3 = f.pregunta3[i].value;
				};
			};
			if (f.pregunta4[i]) {
				if (f.pregunta4[i].checked) {
					p4 = f.pregunta4[i].value;
				};
			};
			if (f.pregunta5[i]) {
				if (f.pregunta5[i].checked) {
					p5 = f.pregunta5[i].value;
				};
			};
			if (f.pregunta6[i]) {
				if (f.pregunta6[i].checked) {
					p6 = f.pregunta6[i].value;
				};
			};
			if (f.pregunta7[i]) {
				if (f.pregunta7[i].checked) {
					p7 = f.pregunta7[i].value;
				};
			};
			if (f.pregunta8[i]) {
				if (f.pregunta8[i].checked) {
					p8 = f.pregunta8[i].value;
				};
			};
			if (f.pregunta9[i]) {
				if (f.pregunta9[i].checked) {
					p9 = f.pregunta9[i].value;
				};
			};
			if (f.pregunta10[i]) {
				if (f.pregunta10[i].checked) {
					p10 = f.pregunta10[i].value;
				};
			};
			if (f.pregunta11[i]) {
				if (f.pregunta11[i].checked) {
					p11 = f.pregunta11[i].value;
				};
			};
			if (f.pregunta12[i]) {
				if (f.pregunta12[i].checked) {
					p12 = f.pregunta12[i].value;
				};
			};
			if (f.pregunta13[i]) {
				if (f.pregunta13[i].checked) {
					p13 = f.pregunta13[i].value;
				};
			};
			if (f.pregunta14[i]) {
				if (f.pregunta14[i].checked) {
					p14 = f.pregunta14[i].value;
				};
			};
			if (f.pregunta15[i]) {
				if (f.pregunta15[i].checked) {
					p15 = f.pregunta15[i].value;
				};
			};
			if (f.pregunta16[i]) {
				if (f.pregunta16[i].checked) {
					p16 = f.pregunta16[i].value;
				};
			};
			if (f.pregunta17[i]) {
				if (f.pregunta17[i].checked) {
					p17 = f.pregunta17[i].value;
				};
			};
			if (f.pregunta18[i]) {
				if (f.pregunta18[i].checked) {
					p18 = f.pregunta18[i].value;
				};
			};
			if (f.pregunta19[i]) {
				if (f.pregunta19[i].checked) {
					p19 = f.pregunta19[i].value;
				};
			};
		};

	item.push({
		"p1": p1,"p2": p2,"p3": p3,"p4": p4,"p5": p5,"p6": p6,"p7": p7,
		"p8": p8,"p9": p9,"p10": p10,"p11": p11,"p12": p12,"p13": p13,"p14": p14,
		"p15": p15,"p16": p16,"p17": p17,"p18": p18,"p19": p19,
		"p20":f.pregunta20.value,
		"p21":f.pregunta21.value,
		"p22":f.pregunta22.value,
		"p23":f.pregunta23.value,
		"p24":f.pregunta24.value

	});
	
	console.log(item);
	f = item;
	$.post("../include/tempo.php",{p:"office",datos:JSON.stringify(item)},resultado);
}
function design(ev){
	console.log("entro design");
	var item = [];
	ev.preventDefault();
    ev.stopPropagation();
	f = ev.currentTarget;
	for (var i = 0; i < f.pregunta1.length; i++) {		
		if (f.pregunta1[i]) {
			if (f.pregunta1[i].checked) {
				p1 = f.pregunta1[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta2.length; i++) {
		if (f.pregunta2[i]) {
			if (f.pregunta2[i].checked) {
				p2 = f.pregunta2[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta3.length; i++) {
		if (f.pregunta3[i]) {
			if (f.pregunta3[i].checked) {
				p3 = f.pregunta3[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta4.length; i++) {
		if (f.pregunta4[i]) {
			if (f.pregunta4[i].checked) {
				p4 = f.pregunta4[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta5.length; i++) {
		if (f.pregunta5[i]) {
			if (f.pregunta5[i].checked) {
				p5 = f.pregunta5[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta6.length; i++) {
		if (f.pregunta6[i]) {
			if (f.pregunta6[i].checked) {
				p6 = f.pregunta6[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta7.length; i++) {
		if (f.pregunta7[i]) {
			if (f.pregunta7[i].checked) {
				p7 = f.pregunta7[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta8.length; i++) {
		if (f.pregunta8[i]) {
			if (f.pregunta8[i].checked) {
				p8 = f.pregunta8[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta9.length; i++) {
		if (f.pregunta9[i]) {
			if (f.pregunta9[i].checked) {
				p9 = f.pregunta9[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta10.length; i++) {
		if (f.pregunta10[i]) {
			if (f.pregunta10[i].checked) {
				p10 = f.pregunta10[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta11.length; i++) {
		if (f.pregunta11[i]) {
			if (f.pregunta11[i].checked) {
				p11 = f.pregunta11[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta12.length; i++) {
		if (f.pregunta12[i]) {
			if (f.pregunta12[i].checked) {
				p12 = f.pregunta12[i].value;
			};
		};		
	};
	for (var i = 0; i < f.pregunta13.length; i++) {
		if (f.pregunta13[i]) {
			if (f.pregunta13[i].checked) {
				p13 = f.pregunta13[i].value;
			};
		};		
	};
	for (var i = 0; i < f.pregunta14.length; i++) {
		if (f.pregunta14[i]) {
			if (f.pregunta14[i].checked) {
				p14 = f.pregunta14[i].value;
			};
		};		
	};
	for (var i = 0; i < f.pregunta15.length; i++) {
		if (f.pregunta15[i]) {
			if (f.pregunta15[i].checked) {
				p15= f.pregunta15[i].value;
			};
		};		
	};
	for (var i = 0; i < f.pregunta16.length; i++) {
		if (f.pregunta16[i]) {
			if (f.pregunta16[i].checked) {
				p16 = f.pregunta16[i].value;
			};
		};		
	};
	for (var i = 0; i < f.pregunta17.length; i++) {
		if (f.pregunta17[i]) {
			if (f.pregunta17[i].checked) {
				p17 = f.pregunta17[i].value;
			};
		};		
	};
	for (var i = 0; i < f.pregunta18.length; i++) {
		if (f.pregunta18[i]) {
			if (f.pregunta18[i].checked) {
				p18 = f.pregunta18[i].value;
			};
		};		
	};
	for (var i = 0; i < f.pregunta19.length; i++) {
		if (f.pregunta19[i]) {
			if (f.pregunta19[i].checked) {
				p19 = f.pregunta19[i].value;
			};
		};		
	};
	item.push({
		"p1": p1,"p2": p2,"p3": p3,"p4": p4,"p5": p5,"p6": p6,"p7": p7,
		"p8": p8,"p9": p9,"p10": p10,"p11": p11,"p12": p12,"p13": p13,
		"p14": p14,"p15": p15,"p16": p16,"p17": p17,"p18": p18,"p19": p19
	});
	
	console.log(item);
	
	$.post("../include/tempo.php",{p:"design",datos:JSON.stringify(item)},resultado);
}
function sspa(ev){
	console.log("entro sspa");
	var item = [];
	ev.preventDefault();
    ev.stopPropagation();
	f = ev.currentTarget;
	for (var i = 0; i < f.pregunta1.length; i++) {		
		if (f.pregunta1[i]) {
			if (f.pregunta1[i].checked) {
				p1 = f.pregunta1[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta2.length; i++) {
		if (f.pregunta2[i]) {
			if (f.pregunta2[i].checked) {
				p2 = f.pregunta2[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta3.length; i++) {
		if (f.pregunta3[i]) {
			if (f.pregunta3[i].checked) {
				p3 = f.pregunta3[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta4.length; i++) {
		if (f.pregunta4[i]) {
			if (f.pregunta4[i].checked) {
				p4 = f.pregunta4[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta5.length; i++) {
		if (f.pregunta5[i]) {
			if (f.pregunta5[i].checked) {
				p5 = f.pregunta5[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta6.length; i++) {
		if (f.pregunta6[i]) {
			if (f.pregunta6[i].checked) {
				p6 = f.pregunta6[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta7.length; i++) {
		if (f.pregunta7[i]) {
			if (f.pregunta7[i].checked) {
				p7 = f.pregunta7[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta8.length; i++) {
		if (f.pregunta8[i]) {
			if (f.pregunta8[i].checked) {
				p8 = f.pregunta8[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta9.length; i++) {
		if (f.pregunta9[i]) {
			if (f.pregunta9[i].checked) {
				p9 = f.pregunta9[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta10.length; i++) {
		if (f.pregunta10[i]) {
			if (f.pregunta10[i].checked) {
				p10 = f.pregunta10[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta11.length; i++) {
		if (f.pregunta11[i]) {
			if (f.pregunta11[i].checked) {
				p11 = f.pregunta11[i].value;
			};
		};
	};
	

	item.push({
		"p1": p1,"p2": p2,"p3": p3,"p4": p4,"p5": p5,"p6": p6,"p7": p7,
		"p8": p8,"p9": p9,"p10": p10,"p11": p11
	});
	
	console.log(item);
	$.post("../include/tempo.php",{p:"sspa",datos:JSON.stringify(item)},resultado);
}
function junior(ev){
	console.log("entro junior");
	var item = [];
	ev.preventDefault();
    ev.stopPropagation();
	f = ev.currentTarget;
	for (var i = 0; i < f.pregunta1.length; i++) {		
		if (f.pregunta1[i]) {
			if (f.pregunta1[i].checked) {
				p1 = f.pregunta1[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta2.length; i++) {
		if (f.pregunta2[i]) {
			if (f.pregunta2[i].checked) {
				p2 = f.pregunta2[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta3.length; i++) {
		if (f.pregunta3[i]) {
			if (f.pregunta3[i].checked) {
				p3 = f.pregunta3[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta4.length; i++) {
		if (f.pregunta4[i]) {
			if (f.pregunta4[i].checked) {
				p4 = f.pregunta4[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta5.length; i++) {
		if (f.pregunta5[i]) {
			if (f.pregunta5[i].checked) {
				p5 = f.pregunta5[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta6.length; i++) {
		if (f.pregunta6[i]) {
			if (f.pregunta6[i].checked) {
				p6 = f.pregunta6[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta7.length; i++) {
		if (f.pregunta7[i]) {
			if (f.pregunta7[i].checked) {
				p7 = f.pregunta7[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta8.length; i++) {
		if (f.pregunta8[i]) {
			if (f.pregunta8[i].checked) {
				p8 = f.pregunta8[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta9.length; i++) {
		if (f.pregunta9[i]) {
			if (f.pregunta9[i].checked) {
				p9 = f.pregunta9[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta10.length; i++) {
		if (f.pregunta10[i]) {
			if (f.pregunta10[i].checked) {
				p10 = f.pregunta10[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta11.length; i++) {
		if (f.pregunta11[i]) {
			if (f.pregunta11[i].checked) {
				p11 = f.pregunta11[i].value;
			};
		};
	};
	

	item.push({
		"p1": p1,"p2": p2,"p3": p3,"p4": p4,"p5": p5,"p6": p6,"p7": p7,
		"p8": p8,"p9": p9,"p10": p10,"p11": p11
	});
	
	console.log(item);
	$.post("../include/tempo.php",{p:"junior",datos:JSON.stringify(item)},resultado);
}
function senior(ev){
	console.log("entro senior");
	var item = [];
	ev.preventDefault();
    ev.stopPropagation();
	f = ev.currentTarget;
	
	for (var i = 0; i < f.pregunta1.length; i++) {		
		if (f.pregunta1[i]) {
			if (f.pregunta1[i].checked) {
				p1 = f.pregunta1[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta2.length; i++) {
		if (f.pregunta2[i]) {
			if (f.pregunta2[i].checked) {
				p2 = f.pregunta2[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta3.length; i++) {
		if (f.pregunta3[i]) {
			if (f.pregunta3[i].checked) {
				p3 = f.pregunta3[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta4.length; i++) {
		if (f.pregunta4[i]) {
			if (f.pregunta4[i].checked) {
				p4 = f.pregunta4[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta5.length; i++) {
		if (f.pregunta5[i]) {
			if (f.pregunta5[i].checked) {
				p5 = f.pregunta5[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta6.length; i++) {
		if (f.pregunta6[i]) {
			if (f.pregunta6[i].checked) {
				p6 = f.pregunta6[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta7.length; i++) {
		if (f.pregunta7[i]) {
			if (f.pregunta7[i].checked) {
				p7 = f.pregunta7[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta8.length; i++) {
		if (f.pregunta8[i]) {
			if (f.pregunta8[i].checked) {
				p8 = f.pregunta8[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta9.length; i++) {
		if (f.pregunta9[i]) {
			if (f.pregunta9[i].checked) {
				p9 = f.pregunta9[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta10.length; i++) {
		if (f.pregunta10[i]) {
			if (f.pregunta10[i].checked) {
				p10 = f.pregunta10[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta11.length; i++) {
		if (f.pregunta11[i]) {
			if (f.pregunta11[i].checked) {
				p11 = f.pregunta11[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta12.length; i++) {
		if (f.pregunta12[i]) {
			if (f.pregunta12[i].checked) {
				p12 = f.pregunta12[i].value;
			};
		};		
	};
	for (var i = 0; i < f.pregunta13.length; i++) {
		if (f.pregunta13[i]) {
			if (f.pregunta13[i].checked) {
				p13 = f.pregunta13[i].value;
			};
		};		
	};
	for (var i = 0; i < f.pregunta14.length; i++) {
		if (f.pregunta14[i]) {
			if (f.pregunta14[i].checked) {
				p14 = f.pregunta14[i].value;
			};
		};		
	};
	for (var i = 0; i < f.pregunta15.length; i++) {
		if (f.pregunta15[i]) {
			if (f.pregunta15[i].checked) {
				p15= f.pregunta15[i].value;
			};
		};		
	};

	item.push({
		"p1": p1,"p2": p2,"p3": p3,"p4": p4,"p5": p5,"p6": p6,"p7": p7,
		"p8": p8,"p9": p9,"p10": p10,"p11": p11,"p12": p12,"p13": p13,
		"p14": p14,"p15": p15
	});
	
	console.log(item);

	$.post("../include/tempo.php",{p:"senior",datos:JSON.stringify(item)},resultado);
}


function Supscada(ev){
	console.log("entro sup scada xD");
	var item = [];
	ev.preventDefault();
    ev.stopPropagation();
	f = ev.currentTarget;
	for (var i = 0; i < f.pregunta1.length; i++) {		
		if (f.pregunta1[i]) {
			if (f.pregunta1[i].checked) {
				p1 = f.pregunta1[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta2.length; i++) {
		if (f.pregunta2[i]) {
			if (f.pregunta2[i].checked) {
				p2 = f.pregunta2[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta3.length; i++) {
		if (f.pregunta3[i]) {
			if (f.pregunta3[i].checked) {
				p3 = f.pregunta3[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta4.length; i++) {
		if (f.pregunta4[i]) {
			if (f.pregunta4[i].checked) {
				p4 = f.pregunta4[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta5.length; i++) {
		if (f.pregunta5[i]) {
			if (f.pregunta5[i].checked) {
				p5 = f.pregunta5[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta6.length; i++) {
		if (f.pregunta6[i]) {
			if (f.pregunta6[i].checked) {
				p6 = f.pregunta6[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta7.length; i++) {
		if (f.pregunta7[i]) {
			if (f.pregunta7[i].checked) {
				p7 = f.pregunta7[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta8.length; i++) {
		if (f.pregunta8[i]) {
			if (f.pregunta8[i].checked) {
				p8 = f.pregunta8[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta9.length; i++) {
		if (f.pregunta9[i]) {
			if (f.pregunta9[i].checked) {
				p9 = f.pregunta9[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta10.length; i++) {
		if (f.pregunta10[i]) {
			if (f.pregunta10[i].checked) {
				p10 = f.pregunta10[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta11.length; i++) {
		if (f.pregunta11[i]) {
			if (f.pregunta11[i].checked) {
				p11 = f.pregunta11[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta12.length; i++) {
		if (f.pregunta12[i]) {
			if (f.pregunta12[i].checked) {
				p12 = f.pregunta12[i].value;
			};
		};		
	};

	item.push({
		"p1": p1,"p2": p2,"p3": p3,"p4": p4,"p5": p5,"p6": p6,"p7": p7,
		"p8": p8,"p9": p9,"p10": p10,"p11": p11,"p12": p12
	});
	
	console.log(item);
	$.post("../include/tempo.php",{p:"supscada",datos:JSON.stringify(item)},resultado);
}

function sst(ev){
	console.log("entro sst xD");
	var item = [];
	ev.preventDefault();
    ev.stopPropagation();
	f = ev.currentTarget;
	for (var i = 0; i < f.pregunta1.length; i++) {		
		if (f.pregunta1[i]) {
			if (f.pregunta1[i].checked) {
				p1 = f.pregunta1[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta2.length; i++) {
		if (f.pregunta2[i]) {
			if (f.pregunta2[i].checked) {
				p2 = f.pregunta2[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta3.length; i++) {
		if (f.pregunta3[i]) {
			if (f.pregunta3[i].checked) {
				p3 = f.pregunta3[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta4.length; i++) {
		if (f.pregunta4[i]) {
			if (f.pregunta4[i].checked) {
				p4 = f.pregunta4[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta5.length; i++) {
		if (f.pregunta5[i]) {
			if (f.pregunta5[i].checked) {
				p5 = f.pregunta5[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta6.length; i++) {
		if (f.pregunta6[i]) {
			if (f.pregunta6[i].checked) {
				p6 = f.pregunta6[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta7.length; i++) {
		if (f.pregunta7[i]) {
			if (f.pregunta7[i].checked) {
				p7 = f.pregunta7[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta8.length; i++) {
		if (f.pregunta8[i]) {
			if (f.pregunta8[i].checked) {
				p8 = f.pregunta8[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta9.length; i++) {
		if (f.pregunta9[i]) {
			if (f.pregunta9[i].checked) {
				p9 = f.pregunta9[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta10.length; i++) {
		if (f.pregunta10[i]) {
			if (f.pregunta10[i].checked) {
				p10 = f.pregunta10[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta11.length; i++) {
		if (f.pregunta11[i]) {
			if (f.pregunta11[i].checked) {
				p11 = f.pregunta11[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta12.length; i++) {
		if (f.pregunta12[i]) {
			if (f.pregunta12[i].checked) {
				p12 = f.pregunta12[i].value;
			};
		};		
	};
	for (var i = 0; i < f.pregunta13.length; i++) {
		if (f.pregunta13[i]) {
			if (f.pregunta13[i].checked) {
				p13 = f.pregunta13[i].value;
			};
		};		
	};
	for (var i = 0; i < f.pregunta14.length; i++) {
		if (f.pregunta14[i]) {
			if (f.pregunta14[i].checked) {
				p14 = f.pregunta14[i].value;
			};
		};		
	};

	item.push({
		"p1": p1,"p2": p2,"p3": p3,"p4": p4,"p5": p5,"p6": p6,"p7": p7,
		"p8": p8,"p9": p9,"p10": p10,"p11": p11,"p12": p12,"p13": p13 ,"p14": p14
	});
	
	console.log(item);
	$.post("../include/tempo.php",{p:"sst",datos:JSON.stringify(item)},resultado);

}

function supcont(ev){
	console.log("entro supcontra");
	var item = [];
	ev.preventDefault();
    ev.stopPropagation();
	f = ev.currentTarget;
	for (var i = 0; i < f.pregunta1.length; i++) {		
		if (f.pregunta1[i]) {
			if (f.pregunta1[i].checked) {
				p1 = f.pregunta1[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta2.length; i++) {
		if (f.pregunta2[i]) {
			if (f.pregunta2[i].checked) {
				p2 = f.pregunta2[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta3.length; i++) {
		if (f.pregunta3[i]) {
			if (f.pregunta3[i].checked) {
				p3 = f.pregunta3[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta4.length; i++) {
		if (f.pregunta4[i]) {
			if (f.pregunta4[i].checked) {
				p4 = f.pregunta4[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta5.length; i++) {
		if (f.pregunta5[i]) {
			if (f.pregunta5[i].checked) {
				p5 = f.pregunta5[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta6.length; i++) {
		if (f.pregunta6[i]) {
			if (f.pregunta6[i].checked) {
				p6 = f.pregunta6[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta7.length; i++) {
		if (f.pregunta7[i]) {
			if (f.pregunta7[i].checked) {
				p7 = f.pregunta7[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta8.length; i++) {
		if (f.pregunta8[i]) {
			if (f.pregunta8[i].checked) {
				p8 = f.pregunta8[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta9.length; i++) {
		if (f.pregunta9[i]) {
			if (f.pregunta9[i].checked) {
				p9 = f.pregunta9[i].value;
			};
		};
	};
	

	item.push({
		"p1": p1,"p2": p2,"p3": p3,"p4": p4,"p5": p5,"p6": p6,"p7": p7,
		"p8": p8,"p9": p9
	});
	
	console.log(item);
	$.post("../include/tempo.php",{p:"supcont",datos:JSON.stringify(item)},resultado);
}

function supconcal(ev){
	console.log("entro calidad");
	var item = [];
	ev.preventDefault();
    ev.stopPropagation();
	f = ev.currentTarget;
	for (var i = 0; i < f.pregunta1.length; i++) {		
		if (f.pregunta1[i]) {
			if (f.pregunta1[i].checked) {
				p1 = f.pregunta1[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta2.length; i++) {
		if (f.pregunta2[i]) {
			if (f.pregunta2[i].checked) {
				p2 = f.pregunta2[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta3.length; i++) {
		if (f.pregunta3[i]) {
			if (f.pregunta3[i].checked) {
				p3 = f.pregunta3[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta4.length; i++) {
		if (f.pregunta4[i]) {
			if (f.pregunta4[i].checked) {
				p4 = f.pregunta4[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta5.length; i++) {
		if (f.pregunta5[i]) {
			if (f.pregunta5[i].checked) {
				p5 = f.pregunta5[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta6.length; i++) {
		if (f.pregunta6[i]) {
			if (f.pregunta6[i].checked) {
				p6 = f.pregunta6[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta7.length; i++) {
		if (f.pregunta7[i]) {
			if (f.pregunta7[i].checked) {
				p7 = f.pregunta7[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta8.length; i++) {
		if (f.pregunta8[i]) {
			if (f.pregunta8[i].checked) {
				p8 = f.pregunta8[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta9.length; i++) {
		if (f.pregunta9[i]) {
			if (f.pregunta9[i].checked) {
				p9 = f.pregunta9[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta10.length; i++) {
		if (f.pregunta10[i]) {
			if (f.pregunta10[i].checked) {
				p10 = f.pregunta10[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta11.length; i++) {
		if (f.pregunta11[i]) {
			if (f.pregunta11[i].checked) {
				p11 = f.pregunta11[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta12.length; i++) {
		if (f.pregunta12[i]) {
			if (f.pregunta12[i].checked) {
				p12 = f.pregunta12[i].value;
			};
		};		
	};
	for (var i = 0; i < f.pregunta13.length; i++) {
		if (f.pregunta13[i]) {
			if (f.pregunta13[i].checked) {
				p13 = f.pregunta13[i].value;
			};
		};		
	};
	for (var i = 0; i < f.pregunta14.length; i++) {
		if (f.pregunta14[i]) {
			if (f.pregunta14[i].checked) {
				p14 = f.pregunta14[i].value;
			};
		};		
	};
	for (var i = 0; i < f.pregunta15.length; i++) {
		if (f.pregunta15[i]) {
			if (f.pregunta15[i].checked) {
				p15= f.pregunta15[i].value;
			};
		};		
	};
	for (var i = 0; i < f.pregunta16.length; i++) {
		if (f.pregunta16[i]) {
			if (f.pregunta16[i].checked) {
				p16 = f.pregunta16[i].value;
			};
		};		
	};
	for (var i = 0; i < f.pregunta17.length; i++) {
		if (f.pregunta17[i]) {
			if (f.pregunta17[i].checked) {
				p17 = f.pregunta17[i].value;
			};
		};		
	};
	for (var i = 0; i < f.pregunta18.length; i++) {
		if (f.pregunta18[i]) {
			if (f.pregunta18[i].checked) {
				p18 = f.pregunta18[i].value;
			};
		};		
	};
	for (var i = 0; i < f.pregunta19.length; i++) {
		if (f.pregunta19[i]) {
			if (f.pregunta19[i].checked) {
				p19 = f.pregunta19[i].value;
			};
		};		
	};

	item.push({
		"p1": p1,"p2": p2,"p3": p3,"p4": p4,"p5": p5,"p6": p6,"p7": p7,
		"p8": p8,"p9": p9,"p10": p10,"p11": p11,"p12": p12,"p13": p13,
		"p14": p14,"p15": p15,"p16": p16,"p17": p17,"p18": p18,"p19": p19
	});
	
	console.log(item);
	$.post("../include/tempo.php",{p:"calidad",datos:JSON.stringify(item)},resultado);

}
function opscada(ev){
	console.log("entro opscada");
	var item = [];
	ev.preventDefault();
    ev.stopPropagation();
	f = ev.currentTarget;
	for (var i = 0; i < f.pregunta1.length; i++) {		
		if (f.pregunta1[i]) {
			if (f.pregunta1[i].checked) {
				p1 = f.pregunta1[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta2.length; i++) {
		if (f.pregunta2[i]) {
			if (f.pregunta2[i].checked) {
				p2 = f.pregunta2[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta3.length; i++) {
		if (f.pregunta3[i]) {
			if (f.pregunta3[i].checked) {
				p3 = f.pregunta3[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta4.length; i++) {
		if (f.pregunta4[i]) {
			if (f.pregunta4[i].checked) {
				p4 = f.pregunta4[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta5.length; i++) {
		if (f.pregunta5[i]) {
			if (f.pregunta5[i].checked) {
				p5 = f.pregunta5[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta6.length; i++) {
		if (f.pregunta6[i]) {
			if (f.pregunta6[i].checked) {
				p6 = f.pregunta6[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta7.length; i++) {
		if (f.pregunta7[i]) {
			if (f.pregunta7[i].checked) {
				p7 = f.pregunta7[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta8.length; i++) {
		if (f.pregunta8[i]) {
			if (f.pregunta8[i].checked) {
				p8 = f.pregunta8[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta9.length; i++) {
		if (f.pregunta9[i]) {
			if (f.pregunta9[i].checked) {
				p9 = f.pregunta9[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta10.length; i++) {
		if (f.pregunta10[i]) {
			if (f.pregunta10[i].checked) {
				p10 = f.pregunta10[i].value;
			};
		};
	};
	
	item.push({
		"p1": p1,"p2": p2,"p3": p3,"p4": p4,"p5": p5,"p6": p6,"p7": p7,
		"p8": p8,"p9": p9,"p10": p10
	});
	
	console.log(item);
	f = item;
	$.post("../include/tempo.php",{p:"opscada",datos:JSON.stringify(item)},resultado);

}
function econta(ev){
	console.log("entro conta");
	var item = [];
	ev.preventDefault();
    ev.stopPropagation();
	f = ev.currentTarget;
	for (var i = 0; i < f.pregunta1.length; i++) {		
		if (f.pregunta1[i]) {
			if (f.pregunta1[i].checked) {
				p1 = f.pregunta1[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta2.length; i++) {
		if (f.pregunta2[i]) {
			if (f.pregunta2[i].checked) {
				p2 = f.pregunta2[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta3.length; i++) {
		if (f.pregunta3[i]) {
			if (f.pregunta3[i].checked) {
				p3 = f.pregunta3[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta4.length; i++) {
		if (f.pregunta4[i]) {
			if (f.pregunta4[i].checked) {
				p4 = f.pregunta4[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta5.length; i++) {
		if (f.pregunta5[i]) {
			if (f.pregunta5[i].checked) {
				p5 = f.pregunta5[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta6.length; i++) {
		if (f.pregunta6[i]) {
			if (f.pregunta6[i].checked) {
				p6 = f.pregunta6[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta7.length; i++) {
		if (f.pregunta7[i]) {
			if (f.pregunta7[i].checked) {
				p7 = f.pregunta7[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta8.length; i++) {
		if (f.pregunta8[i]) {
			if (f.pregunta8[i].checked) {
				p8 = f.pregunta8[i].value;
			};
		};
	};
	
	item.push({
		"p1": p1,"p2": p2,"p3": p3,"p4": p4,"p5": p5,"p6": p6,"p7": p7,
		"p8": p8
	});
	
	console.log(item);
	f = item;
	$.post("../include/tempo.php",{p:"econta",datos:JSON.stringify(item)},resultado);

}
function eventas(ev){
	console.log("entro eventas xD");
	var item = [];
	ev.preventDefault();
    ev.stopPropagation();
	f = ev.currentTarget;
	for (var i = 0; i < f.pregunta1.length; i++) {		
		if (f.pregunta1[i]) {
			if (f.pregunta1[i].checked) {
				p1 = f.pregunta1[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta2.length; i++) {
		if (f.pregunta2[i]) {
			if (f.pregunta2[i].checked) {
				p2 = f.pregunta2[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta3.length; i++) {
		if (f.pregunta3[i]) {
			if (f.pregunta3[i].checked) {
				p3 = f.pregunta3[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta4.length; i++) {
		if (f.pregunta4[i]) {
			if (f.pregunta4[i].checked) {
				p4 = f.pregunta4[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta5.length; i++) {
		if (f.pregunta5[i]) {
			if (f.pregunta5[i].checked) {
				p5 = f.pregunta5[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta6.length; i++) {
		if (f.pregunta6[i]) {
			if (f.pregunta6[i].checked) {
				p6 = f.pregunta6[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta7.length; i++) {
		if (f.pregunta7[i]) {
			if (f.pregunta7[i].checked) {
				p7 = f.pregunta7[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta8.length; i++) {
		if (f.pregunta8[i]) {
			if (f.pregunta8[i].checked) {
				p8 = f.pregunta8[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta9.length; i++) {
		if (f.pregunta9[i]) {
			if (f.pregunta9[i].checked) {
				p9 = f.pregunta9[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta10.length; i++) {
		if (f.pregunta10[i]) {
			if (f.pregunta10[i].checked) {
				p10 = f.pregunta10[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta11.length; i++) {
		if (f.pregunta11[i]) {
			if (f.pregunta11[i].checked) {
				p11 = f.pregunta11[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta12.length; i++) {
		if (f.pregunta12[i]) {
			if (f.pregunta12[i].checked) {
				p12 = f.pregunta12[i].value;
			};
		};		
	};

	item.push({
		"p1": p1,"p2": p2,"p3": p3,"p4": p4,"p5": p5,"p6": p6,"p7": p7,
		"p8": p8,"p9": p9,"p10": p10,"p11": p11,"p12": p12
	});
	
	console.log(item);
	$.post("../include/tempo.php",{p:"ventas",datos:JSON.stringify(item)},resultado);

}
function erh(ev){
	console.log("entro rh");
	var item = [];
	ev.preventDefault();
    ev.stopPropagation();
	f = ev.currentTarget;
	for (var i = 0; i < f.pregunta1.length; i++) {		
		if (f.pregunta1[i]) {
			if (f.pregunta1[i].checked) {
				p1 = f.pregunta1[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta2.length; i++) {
		if (f.pregunta2[i]) {
			if (f.pregunta2[i].checked) {
				p2 = f.pregunta2[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta3.length; i++) {
		if (f.pregunta3[i]) {
			if (f.pregunta3[i].checked) {
				p3 = f.pregunta3[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta4.length; i++) {
		if (f.pregunta4[i]) {
			if (f.pregunta4[i].checked) {
				p4 = f.pregunta4[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta5.length; i++) {
		if (f.pregunta5[i]) {
			if (f.pregunta5[i].checked) {
				p5 = f.pregunta5[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta6.length; i++) {
		if (f.pregunta6[i]) {
			if (f.pregunta6[i].checked) {
				p6 = f.pregunta6[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta7.length; i++) {
		if (f.pregunta7[i]) {
			if (f.pregunta7[i].checked) {
				p7 = f.pregunta7[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta8.length; i++) {
		if (f.pregunta8[i]) {
			if (f.pregunta8[i].checked) {
				p8 = f.pregunta8[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta9.length; i++) {
		if (f.pregunta9[i]) {
			if (f.pregunta9[i].checked) {
				p9 = f.pregunta9[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta10.length; i++) {
		if (f.pregunta10[i]) {
			if (f.pregunta10[i].checked) {
				p10 = f.pregunta10[i].value;
			};
		};
	};
	
	item.push({
		"p1": p1,"p2": p2,"p3": p3,"p4": p4,"p5": p5,"p6": p6,"p7": p7,
		"p8": p8,"p9": p9,"p10": p10
	});
	
	console.log(item);
	$.post("../include/tempo.php",{p:"erh",datos:JSON.stringify(item)},resultado);

}
function adquisiciones(ev){
	console.log("entro adquisiciones");
	var item = [];
	ev.preventDefault();
    ev.stopPropagation();
	f = ev.currentTarget;
	for (var i = 0; i < f.pregunta1.length; i++) {		
		if (f.pregunta1[i]) {
			if (f.pregunta1[i].checked) {
				p1 = f.pregunta1[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta2.length; i++) {
		if (f.pregunta2[i]) {
			if (f.pregunta2[i].checked) {
				p2 = f.pregunta2[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta3.length; i++) {
		if (f.pregunta3[i]) {
			if (f.pregunta3[i].checked) {
				p3 = f.pregunta3[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta4.length; i++) {
		if (f.pregunta4[i]) {
			if (f.pregunta4[i].checked) {
				p4 = f.pregunta4[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta5.length; i++) {
		if (f.pregunta5[i]) {
			if (f.pregunta5[i].checked) {
				p5 = f.pregunta5[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta6.length; i++) {
		if (f.pregunta6[i]) {
			if (f.pregunta6[i].checked) {
				p6 = f.pregunta6[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta7.length; i++) {
		if (f.pregunta7[i]) {
			if (f.pregunta7[i].checked) {
				p7 = f.pregunta7[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta8.length; i++) {
		if (f.pregunta8[i]) {
			if (f.pregunta8[i].checked) {
				p8 = f.pregunta8[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta9.length; i++) {
		if (f.pregunta9[i]) {
			if (f.pregunta9[i].checked) {
				p9 = f.pregunta9[i].value;
			};
		};
	};
	for (var i = 0; i < f.pregunta10.length; i++) {
		if (f.pregunta10[i]) {
			if (f.pregunta10[i].checked) {
				p10 = f.pregunta10[i].value;
			};
		};
	};
	
	item.push({
		"p1": p1,"p2": p2,"p3": p3,"p4": p4,"p5": p5,"p6": p6,"p7": p7,
		"p8": p8,"p9": p9,"p10": p10
	});
	
	console.log(item);
	$.post("../include/tempo.php",{p:"adquisicion",datos:JSON.stringify(item)},resultado);

}
function cleaver(ev){
	console.log("entro cleaver xD");
	var item = [];
	ev.preventDefault();
    ev.stopPropagation();
	f = ev.currentTarget;
	for (var i = 0; i < f.PM1.length; i++) {
			if (f.PM1[i].checked) {
				PM1 = f.PM1[i].value;
			};
	};
	for (var i = 0; i < f.PM2.length; i++) {
			if (f.PM2[i].checked) {
				PM2 = f.PM2[i].value;
			};
	};
	for (var i = 0; i < f.PM3.length; i++) {
			if (f.PM3[i].checked) {
				PM3 = f.PM3[i].value;
			};
	};
	for (var i = 0; i < f.PM4.length; i++) {
			if (f.PM4[i].checked) {
				PM4 = f.PM4[i].value;
			};
	};
	for (var i = 0; i < f.PM5.length; i++) {
			if (f.PM5[i].checked) {
				PM5 = f.PM5[i].value;
			};
	};
	for (var i = 0; i < f.PM6.length; i++) {
			if (f.PM6[i].checked) {
				PM6 = f.PM6[i].value;
			};
	};
	for (var i = 0; i < f.PM7.length; i++) {
			if (f.PM7[i].checked) {
				PM7 = f.PM7[i].value;
			};
	};
	for (var i = 0; i < f.PM8.length; i++) {
			if (f.PM8[i].checked) {
				PM8 = f.PM8[i].value;
			};
	};
	for (var i = 0; i < f.PM9.length; i++) {
			if (f.PM9[i].checked) {
				PM9 = f.PM9[i].value;
			};
	};
	for (var i = 0; i < f.PM10.length; i++) {
			if (f.PM10[i].checked) {
				PM10 = f.PM10[i].value;
			};
	};
	for (var i = 0; i < f.PM11.length; i++) {
			if (f.PM11[i].checked) {
				PM11 = f.PM11[i].value;
			};
	};
	for (var i = 0; i < f.PM12.length; i++) {
			if (f.PM12[i].checked) {
				PM12 = f.PM12[i].value;
			};
	};
	for (var i = 0; i < f.PM13.length; i++) {
			if (f.PM13[i].checked) {
				PM13 = f.PM13[i].value;
			};
	};
	for (var i = 0; i < f.PM14.length; i++) {
			if (f.PM14[i].checked) {
				PM14 = f.PM14[i].value;
			};
	};
	for (var i = 0; i < f.PM15.length; i++) {
			if (f.PM15[i].checked) {
				PM15 = f.PM15[i].value;
			};
	};
	for (var i = 0; i < f.PM16.length; i++) {
			if (f.PM16[i].checked) {
				PM16 = f.PM16[i].value;
			};
	};
	for (var i = 0; i < f.PM17.length; i++) {
			if (f.PM17[i].checked) {
				PM17 = f.PM17[i].value;
			};
	};
	for (var i = 0; i < f.PM18.length; i++) {
			if (f.PM18[i].checked) {
				PM18 = f.PM18[i].value;
			};
	};
	for (var i = 0; i < f.PM19.length; i++) {
			if (f.PM19[i].checked) {
				PM19 = f.PM19[i].value;
			};
	};
	for (var i = 0; i < f.PM20.length; i++) {
			if (f.PM20[i].checked) {
				PM20 = f.PM20[i].value;
			};
	};
	for (var i = 0; i < f.PM21.length; i++) {
			if (f.PM21[i].checked) {
				PM21 = f.PM21[i].value;
			};
	};
	for (var i = 0; i < f.PM22.length; i++) {
			if (f.PM22[i].checked) {
				PM22 = f.PM22[i].value;
			};
	};
	for (var i = 0; i < f.PM23.length; i++) {
			if (f.PM23[i].checked) {
				PM23 = f.PM23[i].value;
			};
	};
	for (var i = 0; i < f.PM24.length; i++) {
			if (f.PM24[i].checked) {
				PM24 = f.PM24[i].value;
			};
	};
	for (var i = 0; i < f.PL1.length; i++) {
			if (f.PL1[i].checked) {
				PL1 = f.PL1[i].value;
			};
	};
	for (var i = 0; i < f.PL2.length; i++) {
			if (f.PL2[i].checked) {
				PL2 = f.PL2[i].value;
			};
	};
	for (var i = 0; i < f.PL3.length; i++) {
			if (f.PL3[i].checked) {
				PL3 = f.PL3[i].value;
			};
	};
	for (var i = 0; i < f.PL4.length; i++) {
			if (f.PL4[i].checked) {
				PL4 = f.PL4[i].value;
			};
	};
	for (var i = 0; i < f.PL5.length; i++) {
			if (f.PL5[i].checked) {
				PL5 = f.PL5[i].value;
			};
	};
	for (var i = 0; i < f.PL6.length; i++) {
			if (f.PL6[i].checked) {
				PL6 = f.PL6[i].value;
			};
	};
	for (var i = 0; i < f.PL7.length; i++) {
			if (f.PL7[i].checked) {
				PL7 = f.PL7[i].value;
			};
	};
	for (var i = 0; i < f.PL8.length; i++) {
			if (f.PL8[i].checked) {
				PL8 = f.PL8[i].value;
			};
	};
	for (var i = 0; i < f.PL9.length; i++) {
			if (f.PL9[i].checked) {
				PL9 = f.PL9[i].value;
			};
	};
	for (var i = 0; i < f.PL10.length; i++) {
			if (f.PL10[i].checked) {
				PL10 = f.PL10[i].value;
			};
	};
	for (var i = 0; i < f.PL11.length; i++) {
			if (f.PL11[i].checked) {
				PL11 = f.PL11[i].value;
			};
	};
	for (var i = 0; i < f.PL12.length; i++) {
			if (f.PL12[i].checked) {
				PL12 = f.PL12[i].value;
			};
	};
	for (var i = 0; i < f.PL13.length; i++) {
			if (f.PL13[i].checked) {
				PL13 = f.PL13[i].value;
			};
	};
	for (var i = 0; i < f.PL14.length; i++) {
			if (f.PL14[i].checked) {
				PL14 = f.PL14[i].value;
			};
	};
	for (var i = 0; i < f.PL15.length; i++) {
			if (f.PL15[i].checked) {
				PL15 = f.PL15[i].value;
			};
	};
	for (var i = 0; i < f.PL16.length; i++) {
			if (f.PL16[i].checked) {
				PL16 = f.PL16[i].value;
			};
	};
	for (var i = 0; i < f.PL17.length; i++) {
			if (f.PL17[i].checked) {
				PL17 = f.PL17[i].value;
			};
	};
	for (var i = 0; i < f.PL18.length; i++) {
			if (f.PL18[i].checked) {
				PL18 = f.PL18[i].value;
			};
	};
	for (var i = 0; i < f.PL19.length; i++) {
			if (f.PL19[i].checked) {
				PL19 = f.PL19[i].value;
			};
	};
	for (var i = 0; i < f.PL20.length; i++) {
			if (f.PL20[i].checked) {
				PL20 = f.PL20[i].value;
			};
	};
	for (var i = 0; i < f.PL21.length; i++) {
			if (f.PL21[i].checked) {
				PL21 = f.PL21[i].value;
			};
	};
	for (var i = 0; i < f.PL22.length; i++) {
			if (f.PL22[i].checked) {
				PL22 = f.PL22[i].value;
			};
	};
	for (var i = 0; i < f.PL23.length; i++) {
			if (f.PL23[i].checked) {
				PL23 = f.PL23[i].value;
			};
	};
	for (var i = 0; i < f.PL24.length; i++) {
			if (f.PL24[i].checked) {
				PL24 = f.PL24[i].value;
			};
	};
	item.push({
		"PM1":PM1,"PM2": PM2, "PM3":PM3, "PM4":PM4, "PM5":PM5,"PM6":PM6, "PM7":PM7, "PM8":PM8, "PM9":PM9, "PM10":PM10,
		"PM11":PM11, "PM12":PM12, "PM13":PM13, "PM14":PM14, "PM15":PM15, "PM16":PM16, "PM17":PM17, "PM18":PM18, "PM19":PM19, "PM20":PM20,
		"PM21":PM21, "PM22":PM22, "PM23":PM23, "PM24":PM24,
		"PL1":PL1,"PL2": PL2, "PL3":PL3, "PL4":PL4, "PL5":PL5,"PL6":PL6, "PL7":PL7, "PL8":PL8, "PL9":PL9, "PL10":PL10,
		"PL11":PL11, "PL12":PL12, "PL13":PL13, "PL14":PL14, "PL15":PL15, "PL16":PL16, "PL17":PL17, "PL18":PL18, "PL19":PL19, "PL20":PL20,
		"PL21":PL21, "PL22":PL22, "PL23":PL23, "PL24":PL24
		
	});
	
	console.log(item);
	
	$.post("../include/tempo.php",{p:"cleaver",cleaver:JSON.stringify(item)},resultado);
}

function ingles(ev){
	console.log("ingles");
}

function resultado(request){
	var r = JSON.parse(request); 
	if (r["q"]==true) {
		console.log(r);
		alert("Datos guardados correctamente");
	} else{
		console.log(r);
		alert("Error al guardar datos intente despues");
	};
		
}

