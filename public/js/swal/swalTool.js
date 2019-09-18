var sawlRet = false;
var swalBase = [
		{ // 0
			title:'Apakah anda yakin ?', 
			text : 'Permintaan akan diteruskan ke RW',
			icon : 'info'
		},	
		{ // 1
			title:'Apakah anda yakin ?', 
			text : 'Menolak permohonan surat pengantar',
			icon : 'warning'
		},		
		{ // 2
			title:'Apakah anda yakin ?', 
			text : 'Mengkonfirmasi permohonan surat pengantar',
			icon : 'info'
		},												
];

function getSwalBody(type, text){
	return {
		title : swalBase[type].title,
		text : text != null ? text : swalBase[type].text,
		icon : swalBase[type].icon,
		buttons : true,
		dangerMode : true
	}
}

function _confirm(type, event, text = null){
	if(!sawlRet){
		swal(getSwalBody(type, text))
		.then((willDelete) => {
			if(willDelete){
				event();
			}
		});
	}
}