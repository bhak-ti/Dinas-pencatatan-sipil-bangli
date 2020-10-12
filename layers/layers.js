var wms_layers = [];
var format_ADMINISTRASIKECAMATAN_AR_0 = new ol.format.GeoJSON();
var features_ADMINISTRASIKECAMATAN_AR_0 = format_ADMINISTRASIKECAMATAN_AR_0.readFeatures(json_ADMINISTRASIKECAMATAN_AR_0, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_ADMINISTRASIKECAMATAN_AR_0 = new ol.source.Vector({
    attributions: [new ol.Attribution({html: '<a href=""></a>'})],
});
jsonSource_ADMINISTRASIKECAMATAN_AR_0.addFeatures(features_ADMINISTRASIKECAMATAN_AR_0);var lyr_ADMINISTRASIKECAMATAN_AR_0 = new ol.layer.Vector({
                declutter: true,
                source:jsonSource_ADMINISTRASIKECAMATAN_AR_0, 
                style: style_ADMINISTRASIKECAMATAN_AR_0,
    title: 'ADMINISTRASIKECAMATAN_AR<br />\
    <img src="styles/legend/ADMINISTRASIKECAMATAN_AR_0_0.png" />  3519.0000 - 4731.0000 <br />\
    <img src="styles/legend/ADMINISTRASIKECAMATAN_AR_0_1.png" />  4731.0000 - 5943.0000 <br />\
    <img src="styles/legend/ADMINISTRASIKECAMATAN_AR_0_2.png" />  5943.0000 - 7155.0000 <br />\
    <img src="styles/legend/ADMINISTRASIKECAMATAN_AR_0_3.png" />  7155.0000 - 8367.0000 <br />\
    <img src="styles/legend/ADMINISTRASIKECAMATAN_AR_0_4.png" />  8367.0000 - 9579.0000 <br />'
        });

lyr_ADMINISTRASIKECAMATAN_AR_0.setVisible(true);
var layersList = [lyr_ADMINISTRASIKECAMATAN_AR_0];
lyr_ADMINISTRASIKECAMATAN_AR_0.set('fieldAliases', {'KDPPUM': 'KDPPUM', 'NAMOBJ': 'NAMOBJ', 'REMARK': 'REMARK', 'KDPBPS': 'KDPBPS', 'FCODE': 'FCODE', 'LUASWH': 'LUASWH', 'UUPP': 'UUPP', 'SRS_ID': 'SRS_ID', 'LCODE': 'LCODE', 'METADATA': 'METADATA', 'KDEBPS': 'KDEBPS', 'KDEPUM': 'KDEPUM', 'KDCBPS': 'KDCBPS', 'KDCPUM': 'KDCPUM', 'KDBBPS': 'KDBBPS', 'KDBPUM': 'KDBPUM', 'WADMKD': 'WADMKD', 'WIADKD': 'WIADKD', 'WADMKC': 'WADMKC', 'WIADKC': 'WIADKC', 'WADMKK': 'WADMKK', 'WIADKK': 'WIADKK', 'WADMPR': 'WADMPR', 'WIADPR': 'WIADPR', 'TIPADM': 'TIPADM', 'SHAPE_Leng': 'SHAPE_Leng', 'SHAPE_Area': 'SHAPE_Area', 'no': 'no', 'jumlah penduduk': 'jumlah penduduk', 'kode dagri': 'kode dagri', });
lyr_ADMINISTRASIKECAMATAN_AR_0.set('fieldImages', {'KDPPUM': 'TextEdit', 'NAMOBJ': 'TextEdit', 'REMARK': 'TextEdit', 'KDPBPS': 'TextEdit', 'FCODE': 'TextEdit', 'LUASWH': 'TextEdit', 'UUPP': 'TextEdit', 'SRS_ID': 'TextEdit', 'LCODE': 'TextEdit', 'METADATA': 'TextEdit', 'KDEBPS': 'TextEdit', 'KDEPUM': 'TextEdit', 'KDCBPS': 'TextEdit', 'KDCPUM': 'TextEdit', 'KDBBPS': 'TextEdit', 'KDBPUM': 'TextEdit', 'WADMKD': 'TextEdit', 'WIADKD': 'TextEdit', 'WADMKC': 'TextEdit', 'WIADKC': 'TextEdit', 'WADMKK': 'TextEdit', 'WIADKK': 'TextEdit', 'WADMPR': 'TextEdit', 'WIADPR': 'TextEdit', 'TIPADM': 'TextEdit', 'SHAPE_Leng': 'TextEdit', 'SHAPE_Area': 'TextEdit', 'no': 'TextEdit', 'jumlah penduduk': 'TextEdit', 'kode dagri': 'TextEdit', });
lyr_ADMINISTRASIKECAMATAN_AR_0.set('fieldLabels', {'KDPPUM': 'no label', 'NAMOBJ': 'inline label', 'REMARK': 'no label', 'KDPBPS': 'no label', 'FCODE': 'no label', 'LUASWH': 'no label', 'UUPP': 'no label', 'SRS_ID': 'no label', 'LCODE': 'no label', 'METADATA': 'no label', 'KDEBPS': 'no label', 'KDEPUM': 'no label', 'KDCBPS': 'no label', 'KDCPUM': 'no label', 'KDBBPS': 'no label', 'KDBPUM': 'no label', 'WADMKD': 'no label', 'WIADKD': 'no label', 'WADMKC': 'no label', 'WIADKC': 'no label', 'WADMKK': 'no label', 'WIADKK': 'no label', 'WADMPR': 'no label', 'WIADPR': 'no label', 'TIPADM': 'no label', 'SHAPE_Leng': 'no label', 'SHAPE_Area': 'no label', 'no': 'no label', 'jumlah penduduk': 'inline label', 'kode dagri': 'inline label', });
lyr_ADMINISTRASIKECAMATAN_AR_0.on('precompose', function(evt) {
    evt.context.globalCompositeOperation = 'normal';
});