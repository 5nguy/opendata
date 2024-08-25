<?xml version='1.0' encoding="UTF-8" standalone="no" ?>
<WMS_Capabilities version="1.3.0"  xmlns="http://www.opengis.net/wms"   xmlns:sld="http://www.opengis.net/sld"   xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"   xmlns:ms="http://mapserver.gis.umn.edu/mapserver"   xsi:schemaLocation="http://www.opengis.net/wms http://schemas.opengis.net/wms/1.3.0/capabilities_1_3_0.xsd  http://www.opengis.net/sld http://schemas.opengis.net/sld/1.1.0/sld_capabilities.xsd  http://mapserver.gis.umn.edu/mapserver https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?service=WMS&amp;version=1.3.0&amp;request=GetSchemaExtension">

<!-- MapServer version 7.6.4 OUTPUT=PNG OUTPUT=JPEG OUTPUT=KML SUPPORTS=PROJ SUPPORTS=AGG SUPPORTS=FREETYPE SUPPORTS=CAIRO SUPPORTS=SVG_SYMBOLS SUPPORTS=RSVG SUPPORTS=ICONV SUPPORTS=FRIBIDI SUPPORTS=WMS_SERVER SUPPORTS=WMS_CLIENT SUPPORTS=WFS_SERVER SUPPORTS=WFS_CLIENT SUPPORTS=WCS_SERVER SUPPORTS=SOS_SERVER SUPPORTS=FASTCGI SUPPORTS=THREADS SUPPORTS=GEOS SUPPORTS=POINT_Z_M SUPPORTS=PBF INPUT=JPEG INPUT=POSTGIS INPUT=OGR INPUT=GDAL INPUT=SHAPEFILE -->

<Service>
  <Name>WMS</Name>
  <Title>Gouvernement du Qc - Donnees ouvertes</Title>
  <Abstract>Gouvernement du Qc - Donnees ouvertes</Abstract>
  <KeywordList>
      <Keyword>Gouvernement du Qc - Donnees ouvertes</Keyword>
  </KeywordList>
  <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?"/>
  <ContactInformation>
    <ContactPersonPrimary>
      <ContactPerson></ContactPerson>
      <ContactOrganization>Ministère de la sécurité publique</ContactOrganization>
    </ContactPersonPrimary>
      <ContactPosition></ContactPosition>
    <ContactAddress>
        <AddressType>postal</AddressType>
        <Address>2525, boul. Laurier, 2e étage</Address>
        <City>Québec</City>
        <StateOrProvince>Quebec</StateOrProvince>
        <PostCode>G1V2L2</PostCode>
        <Country>Canada</Country>
    </ContactAddress>
      <ContactVoiceTelephone></ContactVoiceTelephone>
      <ContactFacsimileTelephone></ContactFacsimileTelephone>
  <ContactElectronicMailAddress>geomsp@msp.gouv.qc.ca</ContactElectronicMailAddress>
  </ContactInformation>
  <Fees>Aucun</Fees>
  <AccessConstraints>L&#39;utilisation des données de ce service WMS est sujette aux conditions d&#39;utilisation stipulées par l&#39;entente ou l&#39;accord de licence entre le Ministère de la sécurité publique du Québec (MSP) et son propriétaire.  Ce service WMS est diffusé selon les informations fournies par le propriétaire et n&#39;a aucune valeur légale. Le Ministère de la sécurité publique n&#39;est pas responsable des erreurs qui pourraient s&#39;y retrouver.</AccessConstraints>
  <MaxWidth>3200</MaxWidth>
  <MaxHeight>3200</MaxHeight>
</Service>

<Capability>
  <Request>
    <GetCapabilities>
      <Format>text/xml</Format>
      <DCPType>
        <HTTP>
          <Get><OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?"/></Get>
          <Post><OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?"/></Post>
        </HTTP>
      </DCPType>
    </GetCapabilities>
    <GetMap>
      <Format>image/tiff</Format>
      <Format>image/png</Format>
      <Format>image/jpeg</Format>
      <Format>image/png; mode=8bit</Format>
      <Format>image/vnd.jpeg-png</Format>
      <Format>image/vnd.jpeg-png8</Format>
      <Format>application/x-pdf</Format>
      <Format>image/svg+xml</Format>
      <Format>application/vnd.google-earth.kml+xml</Format>
      <Format>application/vnd.google-earth.kmz</Format>
      <Format>application/x-protobuf</Format>
      <Format>application/json</Format>
      <DCPType>
        <HTTP>
          <Get><OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?"/></Get>
          <Post><OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?"/></Post>
        </HTTP>
      </DCPType>
    </GetMap>
    <GetFeatureInfo>
      <Format>text/html; charset=UTF-8</Format>
      <Format>application/vnd.ogc.gml</Format>
      <Format>text/plain</Format>
      <DCPType>
        <HTTP>
          <Get><OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?"/></Get>
          <Post><OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?"/></Post>
        </HTTP>
      </DCPType>
    </GetFeatureInfo>
    <sld:DescribeLayer>
      <Format>text/xml</Format>
      <DCPType>
        <HTTP>
          <Get><OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?"/></Get>
          <Post><OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?"/></Post>
        </HTTP>
      </DCPType>
    </sld:DescribeLayer>
    <sld:GetLegendGraphic>
      <Format>image/png</Format>
      <Format>image/jpeg</Format>
      <Format>image/png; mode=8bit</Format>
      <Format>image/vnd.jpeg-png</Format>
      <Format>image/vnd.jpeg-png8</Format>
      <DCPType>
        <HTTP>
          <Get><OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?"/></Get>
          <Post><OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?"/></Post>
        </HTTP>
      </DCPType>
    </sld:GetLegendGraphic>
    <ms:GetStyles>
      <Format>text/xml</Format>
      <DCPType>
        <HTTP>
          <Get><OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?"/></Get>
          <Post><OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?"/></Post>
        </HTTP>
      </DCPType>
    </ms:GetStyles>
  </Request>
  <Exception>
    <Format>XML</Format>
    <Format>INIMAGE</Format>
    <Format>BLANK</Format>
  </Exception>
  <sld:UserDefinedSymbolization SupportSLD="1" UserLayer="0" UserStyle="1" RemoteWFS="0" InlineFeature="0" RemoteWCS="0"/>
  <Layer queryable="1">
    <Name>GOUVOUVERTQC</Name>
    <Title>Gouvernement du Qc - Donnees ouvertes</Title>
    <Abstract>Gouvernement du Qc - Donnees ouvertes</Abstract>
    <KeywordList>
        <Keyword>Gouvernement du Qc - Donnees ouvertes</Keyword>
    </KeywordList>
    <CRS>EPSG:2036</CRS>
    <CRS>EPSG:2037</CRS>
    <CRS>EPSG:2148</CRS>
    <CRS>EPSG:2149</CRS>
    <CRS>EPSG:2150</CRS>
    <CRS>EPSG:2944</CRS>
    <CRS>EPSG:2945</CRS>
    <CRS>EPSG:2946</CRS>
    <CRS>EPSG:2947</CRS>
    <CRS>EPSG:2948</CRS>
    <CRS>EPSG:2949</CRS>
    <CRS>EPSG:2950</CRS>
    <CRS>EPSG:2951</CRS>
    <CRS>EPSG:2952</CRS>
    <CRS>EPSG:3797</CRS>
    <CRS>EPSG:3857</CRS>
    <CRS>EPSG:4267</CRS>
    <CRS>EPSG:4269</CRS>
    <CRS>EPSG:4326</CRS>
    <CRS>EPSG:26917</CRS>
    <CRS>EPSG:26918</CRS>
    <CRS>EPSG:26919</CRS>
    <CRS>EPSG:26920</CRS>
    <CRS>EPSG:32183</CRS>
    <CRS>EPSG:32184</CRS>
    <CRS>EPSG:32185</CRS>
    <CRS>EPSG:32186</CRS>
    <CRS>EPSG:32187</CRS>
    <CRS>EPSG:32188</CRS>
    <CRS>EPSG:32189</CRS>
    <CRS>EPSG:32190</CRS>
    <CRS>EPSG:32198</CRS>
    <CRS>EPSG:42105</CRS>
    <CRS>EPSG:42304</CRS>
    <CRS>EPSG:900913</CRS>
    <CRS>EPSG:900930</CRS>
    <CRS>EPSG:3857</CRS>
    <EX_GeographicBoundingBox>
        <westBoundLongitude>-90.2178</westBoundLongitude>
        <eastBoundLongitude>-46.7822</eastBoundLongitude>
        <southBoundLatitude>42.8632</southBoundLatitude>
        <northBoundLatitude>64.2855</northBoundLatitude>
    </EX_GeographicBoundingBox>
    <BoundingBox CRS="EPSG:32198"
                minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
    <Attribution>
        <Title>© Gouvernement du Québec</Title>
        <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="http://www.droitauteur.gouv.qc.ca/copyright.php"/>
        <LogoURL width="64" height="14">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://pregeoegl.msp.gouv.qc.ca/gouvouvert/public/images/quebec/gouv_qc_logo.png"/>
          </LogoURL>
    </Attribution>
    <Layer queryable="1">
<!-- WARNING: The layer name 'Vigilance/SICS-MSP' might contain spaces or invalid characters or may start with a number. This could lead to potential problems. -->
      <Name>Vigilance/SICS-MSP</Name>
      <Title>Vigilance/SICS-MSP</Title>
      <Abstract>Vigilance/SICS-MSP</Abstract>
    <Style>
       <Name>default</Name>
       <Title>default</Title>
       <LegendURL width="195" height="707">
          <Format>image/png</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=Vigilance/SICS-MSP&amp;format=image/png&amp;STYLE=default"/>
       </LegendURL>
    </Style>
      <Layer queryable="0" opaque="0" cascaded="0">
        <Name>msp_vigilance_crue_publique_v</Name>
        <Title>Signalements par sévérité</Title>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=msp_vigilance_crue_publique_v"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/carte-vigilance-multirisque-fil"/>
        </DataURL>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="174" height="113">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=msp_vigilance_crue_publique_v&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>msp_vigilance_crue_publique_v_type</Name>
        <Title>Signalements par types d&#39;événements</Title>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=msp_vigilance_crue_publique_v_type"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/carte-vigilance-multirisque-fil"/>
        </DataURL>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="195" height="518">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=msp_vigilance_crue_publique_v_type&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>masas_naad_adna_s_public</Name>
        <Title>Zones d&#39;alertes météo (ECCC)</Title>
        <Abstract>Zone d&#39;alerte météo (ECCC)</Abstract>
        <KeywordList>
            <Keyword>masas_naad_adna_s</Keyword>
        </KeywordList>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-1.1e+06</westBoundLongitude>
            <eastBoundLongitude>1.1e+06</eastBoundLongitude>
            <southBoundLatitude>-23500</southBoundLatitude>
            <northBoundLatitude>2.2535e+06</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="0" miny="0" maxx="0" maxy="0" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=masas_naad_adna_s_public"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/carte-vigilance-multirisque-meteo-alerte-ec"/>
        </DataURL>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="150" height="86">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=masas_naad_adna_s_public&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
    </Layer>
    <Layer queryable="1">
<!-- WARNING: The layer name 'MSP/Securite civile/911' might contain spaces or invalid characters or may start with a number. This could lead to potential problems. -->
      <Name>MSP/Securite civile/911</Name>
      <Title>Sécurité publique/Sécurité civile et incendie/911</Title>
      <Abstract>MSP/Securite civile/911</Abstract>
    <Style>
       <Name>default</Name>
       <Title>default</Title>
       <LegendURL width="440" height="842">
          <Format>image/png</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=MSP/Securite civile/911&amp;format=image/png&amp;STYLE=default"/>
       </LegendURL>
    </Style>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>MSP_DESSERTE_MUN_911</Name>
        <Title>Desserte 9-1-1 (Couverture cellulaire)</Title>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=MSP_DESSERTE_MUN_911"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/6a052cb5-42e6-4735-8626-02f62f1294d0"/>
        </DataURL>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="440" height="842">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=MSP_DESSERTE_MUN_911&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
        <MinScaleDenominator>100</MinScaleDenominator>
        <MaxScaleDenominator>1e+08</MaxScaleDenominator>
      </Layer>
    </Layer>
    <Layer queryable="1">
<!-- WARNING: The layer name 'MCC/patrimoine_culturel' might contain spaces or invalid characters or may start with a number. This could lead to potential problems. -->
      <Name>MCC/patrimoine_culturel</Name>
      <Title>Société et culture/Patrimoine Culturel</Title>
      <Abstract>MCC/patrimoine_culturel</Abstract>
    <Style>
       <Name>default</Name>
       <Title>default</Title>
       <LegendURL width="322" height="194">
          <Format>image/png</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=MCC/patrimoine_culturel&amp;format=image/png&amp;STYLE=default"/>
       </LegendURL>
    </Style>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>MCC_V_SITE_PATRIMONIAL_NATIONAL_S</Name>
        <Title>Site patrimonial national</Title>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=MCC_V_SITE_PATRIMONIAL_NATIONAL_S"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/55e8333f-f679-48e2-abfe-944fc9022ae7"/>
        </DataURL>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="176" height="32">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=MCC_V_SITE_PATRIMONIAL_NATIONAL_S&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
        <MinScaleDenominator>1</MinScaleDenominator>
        <MaxScaleDenominator>4e+06</MaxScaleDenominator>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>MCC_V_SITE_PATRIMONIAL_DECLARE_S</Name>
        <Title>Sites patrimoniaux déclarés</Title>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=MCC_V_SITE_PATRIMONIAL_DECLARE_S"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/b35078ae-f1a6-4f9a-a9d2-b00244ae1e84"/>
        </DataURL>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="173" height="32">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=MCC_V_SITE_PATRIMONIAL_DECLARE_S&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
        <MinScaleDenominator>1</MinScaleDenominator>
        <MaxScaleDenominator>4e+06</MaxScaleDenominator>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>MCC_V_SITE_PATRIMONIAL_S</Name>
        <Title>Sites patrimoniaux classés</Title>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=MCC_V_SITE_PATRIMONIAL_S"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/578d182d-4897-4c11-aa7f-ee0cfed222a0"/>
        </DataURL>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="191" height="32">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=MCC_V_SITE_PATRIMONIAL_S&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>MCC_V_SITE_PATRIMONIAL_CITE_P</Name>
        <Title>Sites patrimoniaux cités</Title>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=MCC_V_SITE_PATRIMONIAL_CITE_P"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/34ca1a49-a020-4f60-986b-69fb4cfa852a"/>
        </DataURL>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="150" height="32">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=MCC_V_SITE_PATRIMONIAL_CITE_P&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
        <MinScaleDenominator>1</MinScaleDenominator>
        <MaxScaleDenominator>4e+06</MaxScaleDenominator>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>MCC_V_IP_TERRAIN_PROTEGE_S</Name>
        <Title>Immeubles patrimoniaux classés - terrain protégé</Title>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=MCC_V_IP_TERRAIN_PROTEGE_S"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/33a72ee0-4af3-4d76-8a13-0338e10cdaeb"/>
        </DataURL>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="322" height="32">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=MCC_V_IP_TERRAIN_PROTEGE_S&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
        <MinScaleDenominator>1</MinScaleDenominator>
        <MaxScaleDenominator>4e+06</MaxScaleDenominator>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>MCC_V_IP_TERRAIN_NON_PROTEGE_P</Name>
        <Title>Immeubles patrimoniaux classés</Title>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=MCC_V_IP_TERRAIN_NON_PROTEGE_P"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/33a72ee0-4af3-4d76-8a13-0338e10cdaeb"/>
        </DataURL>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="226" height="32">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=MCC_V_IP_TERRAIN_NON_PROTEGE_P&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
        <MinScaleDenominator>1</MinScaleDenominator>
        <MaxScaleDenominator>4e+06</MaxScaleDenominator>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>MCC_V_IP_CITE_P</Name>
        <Title>Immeubles patrimoniaux cités</Title>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=MCC_V_IP_CITE_P"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/c3d54554-6f25-4117-a573-cf21dcdc9644"/>
        </DataURL>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="209" height="32">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=MCC_V_IP_CITE_P&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
        <MinScaleDenominator>1</MinScaleDenominator>
        <MaxScaleDenominator>4e+06</MaxScaleDenominator>
      </Layer>
    </Layer>
    <Layer queryable="1">
<!-- WARNING: The layer name 'MSP/Securite civile/Vigilance' might contain spaces or invalid characters or may start with a number. This could lead to potential problems. -->
      <Name>MSP/Securite civile/Vigilance</Name>
      <Title>Sécurité publique/Sécurité civile et incendie/Vigilance</Title>
      <Abstract>MSP/Securite civile/Vigilance</Abstract>
    <Style>
       <Name>default</Name>
       <Title>default</Title>
       <LegendURL width="327" height="1301">
          <Format>image/png</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=MSP/Securite civile/Vigilance&amp;format=image/png&amp;STYLE=default"/>
       </LegendURL>
    </Style>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>adn_station_max_public_v</Name>
        <Title>Stations hydrométriques - Seuil de conséquence (Public)</Title>
        <Abstract>Station hydrométrique - pas complet (Source : CEHQ, MDDEP)</Abstract>
        <KeywordList>
            <Keyword>adn_station_max_public_v</Keyword>
        </KeywordList>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=adn_station_max_public_v"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/1d7d1a92-7cba-438b-9e31-e98dedd2f0b8"/>
        </DataURL>
        <Style>
          <Name>BASSIN</Name>
          <Title>BASSIN</Title>
          <LegendURL width="327" height="329">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=adn_station_max_public_v&amp;format=image/png&amp;STYLE=BASSIN"/>
          </LegendURL>
        </Style>
        <Style>
          <Name>REG_ADMIN</Name>
          <Title>REG_ADMIN</Title>
          <LegendURL width="327" height="329">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=adn_station_max_public_v&amp;format=image/png&amp;STYLE=REG_ADMIN"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>adn_bassin_n1_public_v</Name>
        <Title>Bassins versants à surveiller (Public)</Title>
        <Abstract>Bassin versant de niveau 1 (Source : CEHQ, MDDEP)</Abstract>
        <KeywordList>
            <Keyword>adn_bassin_n1_public_v</Keyword>
        </KeywordList>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=adn_bassin_n1_public_v"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/1d7d1a92-7cba-438b-9e31-e98dedd2f0b8"/>
        </DataURL>
        <Style>
          <Name>select</Name>
          <Title>select</Title>
          <LegendURL width="190" height="167">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=adn_bassin_n1_public_v&amp;format=image/png&amp;STYLE=select"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>msp_echelle_limnimetrique</Name>
        <Title>Échelles limnimétriques</Title>
        <Abstract>Échelles limnimétriques</Abstract>
        <KeywordList>
            <Keyword>échelle limnimétriques</Keyword>
        </KeywordList>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=msp_echelle_limnimetrique"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/cbc3a496-cc0f-4930-bc91-b351373110f6"/>
        </DataURL>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="159" height="32">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=msp_echelle_limnimetrique&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>vg_observation_v_inondation_embacle_wmst</Name>
        <Title>Couche publique des historiques d&#39;embâcle répertorié au MSP</Title>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <Dimension name="time" units="ISO8601" nearestValue="0">1980-01-01T05:00:00Z/2025-07-31T05:00:00Z</Dimension>
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=vg_observation_v_inondation_embacle_wmst"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/historique-publique-d-embacles-repertories-au-msp"/>
        </DataURL>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="203" height="167">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=vg_observation_v_inondation_embacle_wmst&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>vg_observation_v_autre_wmst</Name>
        <Title>Historique des événements de sécurité civile (Archives)</Title>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <Dimension name="time" units="ISO8601" nearestValue="0">1900-01-01T05:00:00Z/2021-07-31T05:00:00Z</Dimension>
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=vg_observation_v_autre_wmst"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/dataset/observations-terrain-historiques-devenements-archives"/>
        </DataURL>
        <Style>
          <Name>geoinondation</Name>
          <Title>geoinondation</Title>
          <LegendURL width="223" height="626">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=vg_observation_v_autre_wmst&amp;format=image/png&amp;STYLE=geoinondation"/>
          </LegendURL>
        </Style>
      </Layer>
    </Layer>
    <Layer queryable="1">
<!-- WARNING: The layer name 'MSP/Securite civile/Historiques/Inondation2017' might contain spaces or invalid characters or may start with a number. This could lead to potential problems. -->
      <Name>MSP/Securite civile/Historiques/Inondation2017</Name>
      <Title>Sécurité publique/Sécurité civile et incendie/Historiques/Inondation2017</Title>
      <Abstract>MSP/Securite civile/Historiques/Inondation2017</Abstract>
    <Style>
       <Name>default</Name>
       <Title>default</Title>
       <LegendURL width="163" height="707">
          <Format>image/png</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=MSP/Securite civile/Historiques/Inondation2017&amp;format=image/png&amp;STYLE=default"/>
       </LegendURL>
    </Style>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>vg_observation_inondation_23avril2017_mun_tout_v</Name>
        <Title>Municipalités touchées par les inondations du printemps 2017 (Selon les rapports d&#39;événements du COG)</Title>
        <Abstract>Municipalités touchées par les inondations du printemps 2017 (Selon les rapports d&#39;événements du COG)</Abstract>
        <KeywordList>
            <Keyword></Keyword>
        </KeywordList>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=vg_observation_inondation_23avril2017_mun_tout_v"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/dataset/cartographie-des-inondations-majeures-avril-mai-2017/"/>
        </DataURL>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="106" height="32">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=vg_observation_inondation_23avril2017_mun_tout_v&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
        <MinScaleDenominator>10000</MinScaleDenominator>
        <MaxScaleDenominator>2e+07</MaxScaleDenominator>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>INONDATION_6MAI2017_DEUXMONTAGNE</Name>
        <Title>Zones d&#39;eau libre selon traitement RNCAN avec Radarsat-2 (6 mai 2017 - Lac des Deux Montagnes)</Title>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=INONDATION_6MAI2017_DEUXMONTAGNE"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/cartographie-des-inondations-majeures-avril-mai-2017/resource/0cae6b80-4ebd-4b02-b6f4-b73317eef38e"/>
        </DataURL>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="149" height="32">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=INONDATION_6MAI2017_DEUXMONTAGNE&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
        <MinScaleDenominator>1</MinScaleDenominator>
        <MaxScaleDenominator>1e+07</MaxScaleDenominator>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>INONDATION_6MAI2017_STPIERRE</Name>
        <Title>Zones d&#39;eau libre selon traitement RNCAN avec Radarsat-2 (6 mai 2017 - Lac Saint-Pierre)</Title>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=INONDATION_6MAI2017_STPIERRE"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/cartographie-des-inondations-majeures-avril-mai-2017/resource/0cae6b80-4ebd-4b02-b6f4-b73317eef38e"/>
        </DataURL>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="149" height="32">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=INONDATION_6MAI2017_STPIERRE&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
        <MinScaleDenominator>1</MinScaleDenominator>
        <MaxScaleDenominator>1e+07</MaxScaleDenominator>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>INONDATION_7MAI2017_GATINEAU</Name>
        <Title>Zones d&#39;eau libre selon traitement RNCAN avec Radarsat-2 (7 mai 2017 - Gatineau)</Title>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=INONDATION_7MAI2017_GATINEAU"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/cartographie-des-inondations-majeures-avril-mai-2017/resource/0cae6b80-4ebd-4b02-b6f4-b73317eef38e"/>
        </DataURL>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="149" height="32">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=INONDATION_7MAI2017_GATINEAU&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
        <MinScaleDenominator>1</MinScaleDenominator>
        <MaxScaleDenominator>1e+07</MaxScaleDenominator>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>INONDATION_9MAI2017_GATINEAU_UNION</Name>
        <Title>Zone d&#39;eau libre selon traitement RNCAN avec Radarsat-2 (9 mai 2017 - GATINEAU)</Title>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=INONDATION_9MAI2017_GATINEAU_UNION"/>
        </MetadataURL>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="149" height="32">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=INONDATION_9MAI2017_GATINEAU_UNION&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
        <MinScaleDenominator>1</MinScaleDenominator>
        <MaxScaleDenominator>1e+07</MaxScaleDenominator>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>INONDATION_9MAI2017_DEUXMONTAGNE</Name>
        <Title>Zones d&#39;eau libre selon traitement RNCAN avec Radarsat-2 (9 mai 2017 - Lac des Deux Montagnes)</Title>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=INONDATION_9MAI2017_DEUXMONTAGNE"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/cartographie-des-inondations-majeures-avril-mai-2017/resource/0cae6b80-4ebd-4b02-b6f4-b73317eef38e"/>
        </DataURL>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="149" height="32">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=INONDATION_9MAI2017_DEUXMONTAGNE&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
        <MinScaleDenominator>1</MinScaleDenominator>
        <MaxScaleDenominator>1e+07</MaxScaleDenominator>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>INONDATION_11MAI2017_STPIERRE</Name>
        <Title>Zone d&#39;eau libre selon traitement RNCAN avec Radarsat-2 (11 mai 2017 - Lac St-Pierre)</Title>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=INONDATION_11MAI2017_STPIERRE"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/cartographie-des-inondations-majeures-avril-mai-2017/resource/0cae6b80-4ebd-4b02-b6f4-b73317eef38e"/>
        </DataURL>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="149" height="32">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=INONDATION_11MAI2017_STPIERRE&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
        <MinScaleDenominator>1</MinScaleDenominator>
        <MaxScaleDenominator>1e+07</MaxScaleDenominator>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>INONDATION_13MAI2017_DEUXMONTAGNE</Name>
        <Title>Zone d&#39;eau libre selon traitement RNCAN avec Radarsat-2 (13 mai 2017 - Lac des Deux Montagnes)</Title>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=INONDATION_13MAI2017_DEUXMONTAGNE"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/cartographie-des-inondations-majeures-avril-mai-2017/resource/0cae6b80-4ebd-4b02-b6f4-b73317eef38e"/>
        </DataURL>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="149" height="32">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=INONDATION_13MAI2017_DEUXMONTAGNE&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
        <MinScaleDenominator>1</MinScaleDenominator>
        <MaxScaleDenominator>1e+07</MaxScaleDenominator>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>INONDATION_21MAI2017_DEUXMONTAGNE</Name>
        <Title>Zone (21 mai 2017 - Lac des Deux Montagnes) d&#39;eau libre selon traitement RNCAN avec Radarsat-2</Title>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=INONDATION_21MAI2017_DEUXMONTAGNE"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/dataset/cartographie-des-inondations-majeures-avril-mai-2017/resource/0cae6b80-4ebd-4b02-b6f4-b73317eef38e"/>
        </DataURL>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="149" height="32">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=INONDATION_21MAI2017_DEUXMONTAGNE&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
        <MinScaleDenominator>1</MinScaleDenominator>
        <MaxScaleDenominator>1e+07</MaxScaleDenominator>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>INONDATION_13MAI2017_STPIERRE</Name>
        <Title>Zone d&#39;eau libre selon traitement RNCAN avec Radarsat-2 (13 mai 2017 - Lac St-Pierre)</Title>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=INONDATION_13MAI2017_STPIERRE"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/cartographie-des-inondations-majeures-avril-mai-2017/resource/0cae6b80-4ebd-4b02-b6f4-b73317eef38e"/>
        </DataURL>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="149" height="32">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=INONDATION_13MAI2017_STPIERRE&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
        <MinScaleDenominator>1</MinScaleDenominator>
        <MaxScaleDenominator>1e+07</MaxScaleDenominator>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>INONDATION_17MAI2017_STPIERRE</Name>
        <Title>Zone (17 mai 2017 - Lac St-Pierre) d&#39;eau libre selon traitement RNCAN avec Radarsat-2</Title>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=INONDATION_17MAI2017_STPIERRE"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/cartographie-des-inondations-majeures-avril-mai-2017/resource/0cae6b80-4ebd-4b02-b6f4-b73317eef38e"/>
        </DataURL>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="149" height="32">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=INONDATION_17MAI2017_STPIERRE&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
        <MinScaleDenominator>1</MinScaleDenominator>
        <MaxScaleDenominator>1e+07</MaxScaleDenominator>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>INONDATION_20MAI2017_STPIERRE</Name>
        <Title>Zone (20 mai 2017 - Lac St-Pierre) d&#39;eau libre selon traitement RNCAN avec Radarsat-2</Title>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=INONDATION_20MAI2017_STPIERRE"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/cartographie-des-inondations-majeures-avril-mai-2017/resource/0cae6b80-4ebd-4b02-b6f4-b73317eef38e"/>
        </DataURL>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="149" height="32">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=INONDATION_20MAI2017_STPIERRE&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
        <MinScaleDenominator>1</MinScaleDenominator>
        <MaxScaleDenominator>1e+07</MaxScaleDenominator>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>vg_observation_v_inondation23avril2017_wmst</Name>
        <Title>Historique des événements d&#39;inondation depuis le 23 avril 2017</Title>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <Dimension name="time" units="ISO8601" nearestValue="0">2017-04-22T05:00:00Z/2021-07-31T05:00:00Z</Dimension>
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=vg_observation_v_inondation23avril2017_wmst"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/dataset/cartographie-des-inondations-majeures-avril-mai-2017/"/>
        </DataURL>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="98" height="32">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=vg_observation_v_inondation23avril2017_wmst&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>vg_observation_glissement_23avril2017_tout_v</Name>
        <Title>Historique des événements de sécurité civile (Archives)</Title>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <Dimension name="time" units="ISO8601" nearestValue="0">2017-04-01T05:00:00Z/2021-07-31T05:00:00Z</Dimension>
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=vg_observation_glissement_23avril2017_tout_v"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/dataset/cartographie-des-inondations-majeures-avril-mai-2017/"/>
        </DataURL>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="163" height="32">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=vg_observation_glissement_23avril2017_tout_v&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>MTQ_511_L</Name>
        <Title>Entraves routières (Québec 5-1-1)</Title>
        <Abstract>Entraves routières (Québec 5-1-1)</Abstract>
        <KeywordList>
            <Keyword></Keyword>
        </KeywordList>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-1.1e+06</westBoundLongitude>
            <eastBoundLongitude>1.1e+06</eastBoundLongitude>
            <southBoundLatitude>-23500</southBoundLatitude>
            <northBoundLatitude>2.2535e+06</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="0" miny="0" maxx="0" maxy="0" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=MTQ_511_L"/>
        </MetadataURL>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="82" height="32">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=MTQ_511_L&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
        <MinScaleDenominator>2000</MinScaleDenominator>
        <MaxScaleDenominator>5e+06</MaxScaleDenominator>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>MTQ_511_P</Name>
        <Title>Points d&#39;entraves routières (Québec 5-1-1)</Title>
        <Abstract>Points d&#39;entraves routières (Québec 5-1-1)</Abstract>
        <KeywordList>
            <Keyword></Keyword>
        </KeywordList>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-1.1e+06</westBoundLongitude>
            <eastBoundLongitude>1.1e+06</eastBoundLongitude>
            <southBoundLatitude>-23500</southBoundLatitude>
            <northBoundLatitude>2.2535e+06</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="0" miny="0" maxx="0" maxy="0" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=MTQ_511_P"/>
        </MetadataURL>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="82" height="32">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=MTQ_511_P&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
        <MinScaleDenominator>2000</MinScaleDenominator>
        <MaxScaleDenominator>5e+06</MaxScaleDenominator>
      </Layer>
      <Layer queryable="0" opaque="0" cascaded="0">
        <Name>SPOT6_LAC_STPIERRE_IMAGERIE_VIS</Name>
        <Title>Image visible - Lac-Saint-Pierre (11 mai 2017, SPOT-6)</Title>
        <KeywordList>
            <Keyword>Image visible - Lac-Saint-Pierre (11 mai 2017</Keyword>
            <Keyword> SPOT-6)</Keyword>
        </KeywordList>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-86.8206</westBoundLongitude>
            <eastBoundLongitude>-65.9074</eastBoundLongitude>
            <southBoundLatitude>-0.212548</southBoundLatitude>
            <northBoundLatitude>20.3736</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-2.77317e+06" miny="-5.67596e+06" maxx="339816" maxy="-2.56252e+06" />
    <Attribution>
        <Title>&lt;font size=&#39;2&#39;&gt;© [2017] Airbus Defence and Space, Licence par Planet Labs Geomatics Corp., www.blackbridge.com/geomatics&lt;/a&gt; &lt;/font&gt;</Title>
    </Attribution>
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=SPOT6_LAC_STPIERRE_IMAGERIE_VIS"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/cartographie-des-inondations-majeures-avril-mai-2017"/>
        </DataURL>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="157" height="32">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=SPOT6_LAC_STPIERRE_IMAGERIE_VIS&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="0" opaque="0" cascaded="0">
        <Name>SPOT6_LAC_STPIERRE_IMAGERIE_INFRAR</Name>
        <Title>Image infrarouge - Lac-Saint-Pierre (11 mai 2017, SPOT-6)</Title>
        <KeywordList>
            <Keyword>Image infrarouge - Lac-Saint-Pierre (11 mai 2017</Keyword>
            <Keyword> SPOT-6)</Keyword>
        </KeywordList>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-86.8206</westBoundLongitude>
            <eastBoundLongitude>-65.9074</eastBoundLongitude>
            <southBoundLatitude>-0.212548</southBoundLatitude>
            <northBoundLatitude>20.3736</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-2.77317e+06" miny="-5.67596e+06" maxx="339816" maxy="-2.56252e+06" />
    <Attribution>
        <Title>&lt;font size=&#39;2&#39;&gt;© [2017] Airbus Defence and Space, Licence par Planet Labs Geomatics Corp., www.blackbridge.com/geomatics &lt;/a&gt; &lt;/font&gt;</Title>
    </Attribution>
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=SPOT6_LAC_STPIERRE_IMAGERIE_INFRAR"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/cartographie-des-inondations-majeures-avril-mai-2017"/>
        </DataURL>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="157" height="32">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=SPOT6_LAC_STPIERRE_IMAGERIE_INFRAR&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="0" opaque="0" cascaded="0">
        <Name>PLEIADE_GATINEAU_10MAI_IMAGERIE_VIS</Name>
        <Title>Image visible - Gatineau (10 mai 2017, Pléiades)</Title>
        <KeywordList>
            <Keyword>Image visible - Gatineau (10 mai 2017</Keyword>
            <Keyword> Pléiades)</Keyword>
        </KeywordList>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-89.8206</westBoundLongitude>
            <eastBoundLongitude>-68.9074</eastBoundLongitude>
            <southBoundLatitude>-0.212548</southBoundLatitude>
            <northBoundLatitude>20.3736</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-3.23595e+06" miny="-5.67497e+06" maxx="-48761.5" maxy="-2.46383e+06" />
    <Attribution>
        <Title>&lt;font size=&#39;2&#39;&gt;Inclus du matériel © CNES (2017), Distribution Astrium Services / Spot Image Corporation, USA, tous droits réservés&lt;/a&gt; &lt;/font&gt;</Title>
    </Attribution>
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=PLEIADE_GATINEAU_10MAI_IMAGERIE_VIS"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/cartographie-des-inondations-majeures-avril-mai-2017"/>
        </DataURL>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="157" height="32">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=PLEIADE_GATINEAU_10MAI_IMAGERIE_VIS&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="0" opaque="0" cascaded="0">
        <Name>PLEIADE_GATINEAU_10MAI_IMAGERIE_INFRAR</Name>
        <Title>Image infrarouge - Gatineau (10 mai 2017, Pléiades)</Title>
        <KeywordList>
            <Keyword>Image infrarouge - Gatineau (10 mai 2017</Keyword>
            <Keyword> Pléiades)</Keyword>
        </KeywordList>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-89.8206</westBoundLongitude>
            <eastBoundLongitude>-68.9074</eastBoundLongitude>
            <southBoundLatitude>-0.212548</southBoundLatitude>
            <northBoundLatitude>20.3736</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-3.23595e+06" miny="-5.67497e+06" maxx="-48761.5" maxy="-2.46383e+06" />
    <Attribution>
        <Title>&lt;font size=&#39;2&#39;&gt;Inclus du matériel © CNES (2017), Distribution Astrium Services / Spot Image Corporation, USA, tous droits réservés&lt;/a&gt; &lt;/font&gt;</Title>
    </Attribution>
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=PLEIADE_GATINEAU_10MAI_IMAGERIE_INFRAR"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/cartographie-des-inondations-majeures-avril-mai-2017"/>
        </DataURL>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="157" height="32">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=PLEIADE_GATINEAU_10MAI_IMAGERIE_INFRAR&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="0" opaque="0" cascaded="0">
        <Name>PLEIADE_RIGAUD_12MAI_IMAGERIE_INFRAR</Name>
        <Title>Image infrarouge - Rigaud (12 mai 2017, Pléiades)</Title>
        <KeywordList>
            <Keyword>Image infrarouge - Rigaud (12 mai 2017</Keyword>
            <Keyword> Pléiades)</Keyword>
        </KeywordList>
        <CRS>EPSG:32188</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-74.384</westBoundLongitude>
            <eastBoundLongitude>-74.1972</eastBoundLongitude>
            <southBoundLatitude>45.4671</southBoundLatitude>
            <northBoundLatitude>45.5739</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32188"
                    minx="235806" miny="5.03673e+06" maxx="250282" maxy="5.04846e+06" />
    <Attribution>
        <Title>&lt;font size=&#39;2&#39;&gt;Inclus du matériel © CNES (2017), Distribution Astrium Services / Spot Image Corporation, USA, tous droits réservés&lt;/a&gt; &lt;/font&gt;</Title>
    </Attribution>
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=PLEIADE_RIGAUD_12MAI_IMAGERIE_INFRAR"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/cartographie-des-inondations-majeures-avril-mai-2017"/>
        </DataURL>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="157" height="32">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=PLEIADE_RIGAUD_12MAI_IMAGERIE_INFRAR&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="0" opaque="0" cascaded="0">
        <Name>PLEIADE_RIGAUD_12MAI_IMAGERIE_VIS</Name>
        <Title>Image Rigaud - visible (12 mai 2017, Pléiades)</Title>
        <KeywordList>
            <Keyword>Image Rigaud - visible (12 mai 2017</Keyword>
            <Keyword> Pléiades)</Keyword>
        </KeywordList>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-86.8206</westBoundLongitude>
            <eastBoundLongitude>-65.9074</eastBoundLongitude>
            <southBoundLatitude>-0.212548</southBoundLatitude>
            <northBoundLatitude>20.3736</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-2.77317e+06" miny="-5.67596e+06" maxx="339816" maxy="-2.56252e+06" />
    <Attribution>
        <Title>&lt;font size=&#39;2&#39;&gt;Inclus du matériel © CNES (2017), Distribution Astrium Services / Spot Image Corporation, USA, tous droits réservés&lt;/a&gt; &lt;/font&gt;</Title>
    </Attribution>
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=PLEIADE_RIGAUD_12MAI_IMAGERIE_VIS"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/cartographie-des-inondations-majeures-avril-mai-2017"/>
        </DataURL>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="157" height="32">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=PLEIADE_RIGAUD_12MAI_IMAGERIE_VIS&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="0" opaque="0" cascaded="0">
        <Name>SPOT6_ARCHIPEL_OUEST_IMAGERIE_16MAI_INFRAR</Name>
        <Title>Image infrarouge - Archipel (16 mai 2017, SPOT-6)</Title>
        <KeywordList>
            <Keyword>Image infrarouge - Archipel (16 mai 2017</Keyword>
            <Keyword> SPOT-6)</Keyword>
        </KeywordList>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
    <Attribution>
        <Title>&lt;font size=&#39;2&#39;&gt;© [2017] Airbus Defence and Space, Licence par Planet Labs Geomatics Corp., www.blackbridge.com/geomatics &lt;/a&gt; &lt;/font&gt;</Title>
    </Attribution>
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=SPOT6_ARCHIPEL_OUEST_IMAGERIE_16MAI_INFRAR"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/cartographie-des-inondations-majeures-avril-mai-2017"/>
        </DataURL>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="157" height="32">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=SPOT6_ARCHIPEL_OUEST_IMAGERIE_16MAI_INFRAR&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="0" opaque="0" cascaded="0">
        <Name>SPOT6_ARCHIPEL_OUEST_IMAGERIE_16MAI</Name>
        <Title>Image visible - Archipel (16 mai 2017, SPOT-6)</Title>
        <KeywordList>
            <Keyword>Image visible - Archipel (16 mai 2017</Keyword>
            <Keyword> SPOT-6)</Keyword>
        </KeywordList>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
    <Attribution>
        <Title>&lt;font size=&#39;2&#39;&gt;© CNES (2017), Distribution AIRBUS DS&lt;/a&gt; &lt;/font&gt;</Title>
    </Attribution>
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=SPOT6_ARCHIPEL_OUEST_IMAGERIE_16MAI"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/cartographie-des-inondations-majeures-avril-mai-2017"/>
        </DataURL>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="157" height="32">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=SPOT6_ARCHIPEL_OUEST_IMAGERIE_16MAI&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="0" opaque="0" cascaded="0">
        <Name>SPOT6_LAC_STPIERRE_IMAGERIE_VIS_16MAI</Name>
        <Title>Image Lac St-Pierre - visible (16 mai 2017, SPOT-6)</Title>
        <KeywordList>
            <Keyword>Image visible - Lac-Saint-Pierre (16 mai 2017</Keyword>
            <Keyword> SPOT-6)</Keyword>
        </KeywordList>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=SPOT6_LAC_STPIERRE_IMAGERIE_VIS_16MAI"/>
        </MetadataURL>
        <DataURL>
          <Format>igo</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://intranet.donnees.qc/data/dataset/images-satellites-inondation-23-avril-2017"/>
        </DataURL>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="157" height="32">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=SPOT6_LAC_STPIERRE_IMAGERIE_VIS_16MAI&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="0" opaque="0" cascaded="0">
        <Name>SPOT6_LAC_STPIERRE_IMAGERIE_INFRAR_16MAI</Name>
        <Title>Image Lac St-Pierre - infrarouge (16 mai 2017, SPOT-6)</Title>
        <KeywordList>
            <Keyword>Image infrarouge - Lac-Saint-Pierre (16 mai 2017</Keyword>
            <Keyword> SPOT-6)</Keyword>
        </KeywordList>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=SPOT6_LAC_STPIERRE_IMAGERIE_INFRAR_16MAI"/>
        </MetadataURL>
        <DataURL>
          <Format>igo</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://intranet.donnees.qc/data/dataset/images-satellites-inondation-23-avril-2017"/>
        </DataURL>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="157" height="32">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=SPOT6_LAC_STPIERRE_IMAGERIE_INFRAR_16MAI&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
    </Layer>
    <Layer queryable="1">
<!-- WARNING: The layer name 'MSP/Securite civile/Historiques/GrandeMaree2010' might contain spaces or invalid characters or may start with a number. This could lead to potential problems. -->
      <Name>MSP/Securite civile/Historiques/GrandeMaree2010</Name>
      <Title>Sécurité publique/Sécurité civile et incendie/Historiques/Grande marée-décembre 2010</Title>
      <Abstract>MSP/Securite civile/Historiques/GrandeMaree2010</Abstract>
    <Style>
       <Name>default</Name>
       <Title>default</Title>
       <LegendURL width="128" height="32">
          <Format>image/png</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=MSP/Securite civile/Historiques/GrandeMaree2010&amp;format=image/png&amp;STYLE=default"/>
       </LegendURL>
    </Style>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>msp_vague_dec2010_lcc_l</Name>
        <Title>Déferlement de vagues</Title>
        <KeywordList>
            <Keyword>Déferlement de vagues</Keyword>
        </KeywordList>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=msp_vague_dec2010_lcc_l"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/39bdcc75-dbaf-424d-9dbd-265c282f14f5"/>
        </DataURL>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="128" height="32">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=msp_vague_dec2010_lcc_l&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
        <MinScaleDenominator>100</MinScaleDenominator>
        <MaxScaleDenominator>2e+06</MaxScaleDenominator>
      </Layer>
    </Layer>
    <Layer queryable="1">
<!-- WARNING: The layer name 'MSP/Securite civile/Historiques/LacMegantic' might contain spaces or invalid characters or may start with a number. This could lead to potential problems. -->
      <Name>MSP/Securite civile/Historiques/LacMegantic</Name>
      <Title>Sécurité publique/Sécurité civile et incendie/Historiques/Lac-Mégantic - déraillement de train</Title>
      <Abstract>MSP/Securite civile/Historiques/LacMegantic</Abstract>
    <Style>
       <Name>default</Name>
       <Title>default</Title>
       <LegendURL width="305" height="545">
          <Format>image/png</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=MSP/Securite civile/Historiques/LacMegantic&amp;format=image/png&amp;STYLE=default"/>
       </LegendURL>
    </Style>
      <Layer queryable="0" opaque="0" cascaded="0">
        <Name>MEGANTIC_PLEIADES20131104</Name>
        <Title>Image Pleiades-1A après l&#39;incident  Lac-Mégantic - 4 Novembre 2013</Title>
        <KeywordList>
            <Keyword>Image Pleiades-1A après l&#39;incident  Lac-Mégantic - 4 Novembre 2013</Keyword>
        </KeywordList>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-70.9165</westBoundLongitude>
            <eastBoundLongitude>-70.8425</eastBoundLongitude>
            <southBoundLatitude>45.5491</southBoundLatitude>
            <northBoundLatitude>45.6031</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-188817" miny="175643" maxx="-182898" maxy="181783" />
    <Attribution>
        <Title>&lt;font size=&#39;2&#39;&gt;Inclus du matériel © &lt;a href=&#39;http://www.cnes.fr&#39; target=&#39;_blank&#39;&gt; CNES  &lt;/a&gt; 2013, &lt;a href=&#39;http://www.astrium-geo.com&#39; target=&#39;_blank&#39;&gt;Distribution Astrium Services / Spot Image Corporation, États-Unis, tous droits réservés.&lt;/a&gt; &lt;/font&gt;</Title>
    </Attribution>
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=MEGANTIC_PLEIADES20131104"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/a4209cea-3aeb-4e64-8dab-2e2ae19dafe9"/>
        </DataURL>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="272" height="32">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=MEGANTIC_PLEIADES20131104&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="0" opaque="0" cascaded="0">
        <Name>MEGANTIC_PLEIADES20130713</Name>
        <Title>Image Pleiades-1B après l&#39;incident  Lac-Mégantic -  13 juillet 2013</Title>
        <KeywordList>
            <Keyword>Image Pleiades-1B après l&#39;incident  Lac-Mégantic - 13 juillet 2013</Keyword>
        </KeywordList>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-70.9165</westBoundLongitude>
            <eastBoundLongitude>-70.8426</eastBoundLongitude>
            <southBoundLatitude>45.5504</southBoundLatitude>
            <northBoundLatitude>45.6022</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-188811" miny="175789" maxx="-182902" maxy="181680" />
    <Attribution>
        <Title>&lt;font size=&#39;2&#39;&gt;Inclus du matériel © &lt;a href=&#39;http://www.cnes.fr&#39; target=&#39;_blank&#39;&gt; CNES  &lt;/a&gt; 2013, &lt;a href=&#39;http://www.astrium-geo.com&#39; target=&#39;_blank&#39;&gt;Distribution Astrium Services / Spot Image Corporation, États-Unis, tous droits réservés.&lt;/a&gt; &lt;/font&gt;</Title>
    </Attribution>
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=MEGANTIC_PLEIADES20130713"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/a4209cea-3aeb-4e64-8dab-2e2ae19dafe9"/>
        </DataURL>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="249" height="32">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=MEGANTIC_PLEIADES20130713&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="0" opaque="0" cascaded="0">
        <Name>MEGANTIC_PLEIADES20130729</Name>
        <Title>Image Pleiades-1B après l&#39;incident  Lac-Mégantic -  29 juillet 2013</Title>
        <KeywordList>
            <Keyword>Image Pleiades-1B après l&#39;incident  Lac-Mégantic - 29 juillet 2013</Keyword>
        </KeywordList>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-70.9165</westBoundLongitude>
            <eastBoundLongitude>-70.8426</eastBoundLongitude>
            <southBoundLatitude>45.5506</southBoundLatitude>
            <northBoundLatitude>45.6018</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-188811" miny="175811" maxx="-182904" maxy="181634" />
    <Attribution>
        <Title>&lt;font size=&#39;2&#39;&gt;Inclus du matériel © &lt;a href=&#39;http://www.cnes.fr&#39; target=&#39;_blank&#39;&gt; CNES  &lt;/a&gt; 2013, &lt;a href=&#39;http://www.astrium-geo.com&#39; target=&#39;_blank&#39;&gt;Distribution Astrium Services / Spot Image Corporation, États-Unis, tous droits réservés.&lt;/a&gt; &lt;/font&gt;</Title>
    </Attribution>
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=MEGANTIC_PLEIADES20130729"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/a4209cea-3aeb-4e64-8dab-2e2ae19dafe9"/>
        </DataURL>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="249" height="32">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=MEGANTIC_PLEIADES20130729&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="0" opaque="0" cascaded="0">
        <Name>MEGANTIC_PLEIADES20130802</Name>
        <Title>Image Pleiades-1A après l&#39;incident  Lac-Mégantic -  2 août 2013</Title>
        <KeywordList>
            <Keyword>Image Pleiades-1A après l&#39;incident  Lac-Mégantic - 2 août 2013</Keyword>
        </KeywordList>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-70.9165</westBoundLongitude>
            <eastBoundLongitude>-70.8426</eastBoundLongitude>
            <southBoundLatitude>45.5506</southBoundLatitude>
            <northBoundLatitude>45.6018</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-188811" miny="175811" maxx="-182904" maxy="181634" />
    <Attribution>
        <Title>&lt;font size=&#39;2&#39;&gt;Inclus du matériel © &lt;a href=&#39;http://www.cnes.fr&#39; target=&#39;_blank&#39;&gt; CNES  &lt;/a&gt; 2013, &lt;a href=&#39;http://www.astrium-geo.com&#39; target=&#39;_blank&#39;&gt;Distribution Astrium Services / Spot Image Corporation, États-Unis, tous droits réservés.&lt;/a&gt; &lt;/font&gt;</Title>
    </Attribution>
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=MEGANTIC_PLEIADES20130802"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/a4209cea-3aeb-4e64-8dab-2e2ae19dafe9"/>
        </DataURL>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="237" height="32">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=MEGANTIC_PLEIADES20130802&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="0" opaque="0" cascaded="0">
        <Name>MEGANTIC_PLEIADES20130815</Name>
        <Title>Image Pleiades-1B après l&#39;incident  Lac-Mégantic -  15 août 2013</Title>
        <KeywordList>
            <Keyword>Image Pleiades-1B après l&#39;incident  Lac-Mégantic - 15 aoû 2013</Keyword>
        </KeywordList>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-70.9165</westBoundLongitude>
            <eastBoundLongitude>-70.8426</eastBoundLongitude>
            <southBoundLatitude>45.5506</southBoundLatitude>
            <northBoundLatitude>45.6018</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-188811" miny="175811" maxx="-182904" maxy="181634" />
    <Attribution>
        <Title>&lt;font size=&#39;2&#39;&gt;Inclus du matériel © &lt;a href=&#39;http://www.cnes.fr&#39; target=&#39;_blank&#39;&gt; CNES  &lt;/a&gt; 2013, &lt;a href=&#39;http://www.astrium-geo.com&#39; target=&#39;_blank&#39;&gt;Distribution Astrium Services / Spot Image Corporation, États-Unis, tous droits réservés.&lt;/a&gt; &lt;/font&gt;</Title>
    </Attribution>
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=MEGANTIC_PLEIADES20130815"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/a4209cea-3aeb-4e64-8dab-2e2ae19dafe9"/>
        </DataURL>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="245" height="32">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=MEGANTIC_PLEIADES20130815&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="0" opaque="0" cascaded="0">
        <Name>MEGANTIC_PLEIADES20130824</Name>
        <Title>Image Pleiades-1B après l&#39;incident  Lac-Mégantic - 24 août 2013</Title>
        <KeywordList>
            <Keyword>Image Pleiades-1B après l&#39;incident  Lac-Mégantic - 24 août 2013</Keyword>
        </KeywordList>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-70.9165</westBoundLongitude>
            <eastBoundLongitude>-70.8426</eastBoundLongitude>
            <southBoundLatitude>45.5506</southBoundLatitude>
            <northBoundLatitude>45.6018</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-188811" miny="175811" maxx="-182904" maxy="181634" />
    <Attribution>
        <Title>&lt;font size=&#39;2&#39;&gt;Inclus du matériel © &lt;a href=&#39;http://www.cnes.fr&#39; target=&#39;_blank&#39;&gt; CNES  &lt;/a&gt; 2013, &lt;a href=&#39;http://www.astrium-geo.com&#39; target=&#39;_blank&#39;&gt;Distribution Astrium Services / Spot Image Corporation, États-Unis, tous droits réservés.&lt;/a&gt; &lt;/font&gt;</Title>
    </Attribution>
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=MEGANTIC_PLEIADES20130824"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/a4209cea-3aeb-4e64-8dab-2e2ae19dafe9"/>
        </DataURL>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="245" height="32">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=MEGANTIC_PLEIADES20130824&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="0" opaque="0" cascaded="0">
        <Name>MEGANTIC_PLEIADES20130906</Name>
        <Title>Image Pleiades-1A après l&#39;incident  Lac-Mégantic - 6 septembre 2013</Title>
        <KeywordList>
            <Keyword>Image Pleiades-1A après l&#39;incident  Lac-Mégantic - 6 septembre 2013</Keyword>
        </KeywordList>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-70.9165</westBoundLongitude>
            <eastBoundLongitude>-70.8426</eastBoundLongitude>
            <southBoundLatitude>45.5506</southBoundLatitude>
            <northBoundLatitude>45.6018</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-188811" miny="175811" maxx="-182905" maxy="181634" />
    <Attribution>
        <Title>&lt;font size=&#39;2&#39;&gt;Inclus du matériel © &lt;a href=&#39;http://www.cnes.fr&#39; target=&#39;_blank&#39;&gt; CNES  &lt;/a&gt; 2013, &lt;a href=&#39;http://www.astrium-geo.com&#39; target=&#39;_blank&#39;&gt;Distribution Astrium Services / Spot Image Corporation, États-Unis, tous droits réservés.&lt;/a&gt; &lt;/font&gt;</Title>
    </Attribution>
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=MEGANTIC_PLEIADES20130906"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/a4209cea-3aeb-4e64-8dab-2e2ae19dafe9"/>
        </DataURL>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="273" height="32">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=MEGANTIC_PLEIADES20130906&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="0" opaque="0" cascaded="0">
        <Name>MEGANTIC_PLEIADES20130917</Name>
        <Title>Image Pleiades-1B après l&#39;incident  Lac-Mégantic - 17 septembre 2013</Title>
        <KeywordList>
            <Keyword>Image Pleiades-1B après l&#39;incident  Lac-Mégantic - 17 septembre 2013</Keyword>
        </KeywordList>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-70.9167</westBoundLongitude>
            <eastBoundLongitude>-70.8425</eastBoundLongitude>
            <southBoundLatitude>45.549</southBoundLatitude>
            <northBoundLatitude>45.6034</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-188831" miny="175629" maxx="-182895" maxy="181810" />
    <Attribution>
        <Title>&lt;font size=&#39;2&#39;&gt;Inclus du matériel © &lt;a href=&#39;http://www.cnes.fr&#39; target=&#39;_blank&#39;&gt; CNES  &lt;/a&gt; 2013, &lt;a href=&#39;http://www.astrium-geo.com&#39; target=&#39;_blank&#39;&gt;Distribution Astrium Services / Spot Image Corporation, États-Unis, tous droits réservés.&lt;/a&gt; &lt;/font&gt;</Title>
    </Attribution>
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=MEGANTIC_PLEIADES20130917"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/a4209cea-3aeb-4e64-8dab-2e2ae19dafe9"/>
        </DataURL>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="281" height="32">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=MEGANTIC_PLEIADES20130917&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="0" opaque="0" cascaded="0">
        <Name>MEGANTIC_PLEIADES20130930</Name>
        <Title>Image Pleiades-1B après l&#39;incident  Lac-Mégantic -  30 septembre 2013</Title>
        <KeywordList>
            <Keyword>Image Pleiades-1B après l&#39;incident  Lac-Mégantic - 30 septembre 2013</Keyword>
        </KeywordList>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-70.9165</westBoundLongitude>
            <eastBoundLongitude>-70.8425</eastBoundLongitude>
            <southBoundLatitude>45.5489</southBoundLatitude>
            <northBoundLatitude>45.6035</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-188818" miny="175620" maxx="-182895" maxy="181823" />
    <Attribution>
        <Title>&lt;font size=&#39;2&#39;&gt;Inclus du matériel © &lt;a href=&#39;http://www.cnes.fr&#39; target=&#39;_blank&#39;&gt; CNES  &lt;/a&gt; 2013, &lt;a href=&#39;http://www.astrium-geo.com&#39; target=&#39;_blank&#39;&gt;Distribution Astrium Services / Spot Image Corporation, États-Unis, tous droits réservés.&lt;/a&gt; &lt;/font&gt;</Title>
    </Attribution>
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=MEGANTIC_PLEIADES20130930"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/a4209cea-3aeb-4e64-8dab-2e2ae19dafe9"/>
        </DataURL>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="281" height="32">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=MEGANTIC_PLEIADES20130930&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="0" opaque="0" cascaded="0">
        <Name>MEGANTIC_USGS</Name>
        <Title>Lac-Mégantic Image USGS - 7 juillet 2013</Title>
        <KeywordList>
            <Keyword>Image Digital Globe après l&#39;incident  Lac-Mégantic - 7 juillet 2013</Keyword>
        </KeywordList>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-70.8896</westBoundLongitude>
            <eastBoundLongitude>-70.8776</eastBoundLongitude>
            <southBoundLatitude>45.571</southBoundLatitude>
            <northBoundLatitude>45.5819</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-186624" miny="178164" maxx="-185729" maxy="179349" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=MEGANTIC_USGS"/>
        </MetadataURL>
<!-- WARNING: Some mandatory elements for 'DataURL' are missing in this context. -->
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="213" height="32">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=MEGANTIC_USGS&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="0" opaque="0" cascaded="0">
        <Name>MEGANTIC_AEROPHOTO</Name>
        <Title>Image Aéro-Photo après l&#39;incident Lac-Mégantic - 10 juillet 2013</Title>
        <KeywordList>
            <Keyword>Image Aéro-Photo après l&#39;incident Lac-Mégantic - 10 juillet 2013</Keyword>
        </KeywordList>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-70.8947</westBoundLongitude>
            <eastBoundLongitude>-70.869</eastBoundLongitude>
            <southBoundLatitude>45.5718</southBoundLatitude>
            <northBoundLatitude>45.5836</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-187053" miny="178215" maxx="-185015" maxy="179572" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=MEGANTIC_AEROPHOTO"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/73d3abac-12e2-4fac-81bd-b96007fde794"/>
        </DataURL>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="212" height="32">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=MEGANTIC_AEROPHOTO&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
        <MinScaleDenominator>1</MinScaleDenominator>
        <MaxScaleDenominator>150000</MaxScaleDenominator>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>MEGANTIC_PERI_VERT</Name>
        <Title>Lac-Mégantic - Périmètre vert (Inactif) de l&#39;accident de train du 6 juillet 2013</Title>
        <KeywordList>
            <Keyword>Lac-Mégantic - Périmètre vert (Inactif) de l&#39;accident de train du 6 juillet 2013</Keyword>
        </KeywordList>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=MEGANTIC_PERI_VERT"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/f3e2f105-c464-4d95-89a8-6f851a5c4f7f"/>
        </DataURL>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="148" height="32">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=MEGANTIC_PERI_VERT&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
        <MinScaleDenominator>1</MinScaleDenominator>
        <MaxScaleDenominator>200000</MaxScaleDenominator>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>MEGANTIC_PERI_JAUNE</Name>
        <Title>Lac-Mégantic - Périmètre jaune (Actif) de l&#39;accident de train du 6 juillet 2013</Title>
        <KeywordList>
            <Keyword>Lac-Mégantic - Périmètre jaune (Actif) de l&#39;accident de train du 6 juillet 2013</Keyword>
        </KeywordList>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=MEGANTIC_PERI_JAUNE"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/f3e2f105-c464-4d95-89a8-6f851a5c4f7f"/>
        </DataURL>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="148" height="32">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=MEGANTIC_PERI_JAUNE&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
        <MinScaleDenominator>1</MinScaleDenominator>
        <MaxScaleDenominator>200000</MaxScaleDenominator>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>MEGANTIC_PERI_ROUGE</Name>
        <Title>Lac-Mégantic - Périmètre rouge (Inactif) de l&#39;accident de train du 6 juillet 2013</Title>
        <KeywordList>
            <Keyword>Lac-Mégantic - Périmètre rouge (Inactif) de l&#39;accident de train du 6 juillet 2013</Keyword>
        </KeywordList>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=MEGANTIC_PERI_ROUGE"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/f3e2f105-c464-4d95-89a8-6f851a5c4f7f"/>
        </DataURL>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="148" height="32">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=MEGANTIC_PERI_ROUGE&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
        <MinScaleDenominator>1</MinScaleDenominator>
        <MaxScaleDenominator>200000</MaxScaleDenominator>
      </Layer>
      <Layer queryable="0" opaque="0" cascaded="0">
        <Name>MEGANTIC_PLEIADES20140702</Name>
        <Title>Image Pleiades-1B Lac-Mégantic - 2 juillet 2014</Title>
        <KeywordList>
            <Keyword>Image Pleiades-1B Lac-Mégantic - 2 juillet 2014</Keyword>
        </KeywordList>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-70.9165</westBoundLongitude>
            <eastBoundLongitude>-70.8425</eastBoundLongitude>
            <southBoundLatitude>45.5489</southBoundLatitude>
            <northBoundLatitude>45.6035</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-188818" miny="175620" maxx="-182895" maxy="181823" />
    <Attribution>
        <Title>&lt;font size=&#39;2&#39;&gt;Inclus du matériel © &lt;a href=&#39;http://www.cnes.fr&#39; target=&#39;_blank&#39;&gt; CNES  &lt;/a&gt; 2014, &lt;a href=&#39;http://www.astrium-geo.com&#39; target=&#39;_blank&#39;&gt;Distribution Astrium Services / Spot Image Corporation, États-Unis, tous droits réservés.&lt;/a&gt; &lt;/font&gt;</Title>
    </Attribution>
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=MEGANTIC_PLEIADES20140702"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/a4209cea-3aeb-4e64-8dab-2e2ae19dafe9"/>
        </DataURL>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="242" height="32">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=MEGANTIC_PLEIADES20140702&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="0" opaque="0" cascaded="0">
        <Name>MEGANTIC_PLEIADES20141012</Name>
        <Title>Image Pleiades-1B Lac-Mégantic - 12 octobre 2014</Title>
        <KeywordList>
            <Keyword>Image Pleiades-1B Lac-Mégantic - 12 octobre 2014</Keyword>
        </KeywordList>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-70.9163</westBoundLongitude>
            <eastBoundLongitude>-70.8427</eastBoundLongitude>
            <southBoundLatitude>45.5506</southBoundLatitude>
            <northBoundLatitude>45.6021</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-188796" miny="175802" maxx="-182915" maxy="181665" />
    <Attribution>
        <Title>&lt;font size=&#39;2&#39;&gt;Inclus du matériel © &lt;a href=&#39;http://www.cnes.fr&#39; target=&#39;_blank&#39;&gt; CNES  &lt;/a&gt; 2014, &lt;a href=&#39;http://www.astrium-geo.com&#39; target=&#39;_blank&#39;&gt;Distribution Astrium Services / Spot Image Corporation, États-Unis, tous droits réservés.&lt;/a&gt; &lt;/font&gt;</Title>
    </Attribution>
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=MEGANTIC_PLEIADES20141012"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/a4209cea-3aeb-4e64-8dab-2e2ae19dafe9"/>
        </DataURL>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="263" height="32">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=MEGANTIC_PLEIADES20141012&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="0" opaque="0" cascaded="0">
        <Name>MEGANTIC_PLEIADES20141103</Name>
        <Title>Image Pleiades-1B Lac-Mégantic - 3 novembre 2014</Title>
        <KeywordList>
            <Keyword>Image Pleiades-1B Lac-Mégantic - 3 novembre 2014</Keyword>
        </KeywordList>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-70.9165</westBoundLongitude>
            <eastBoundLongitude>-70.8426</eastBoundLongitude>
            <southBoundLatitude>45.5504</southBoundLatitude>
            <northBoundLatitude>45.6022</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-188811" miny="175789" maxx="-182902" maxy="181680" />
    <Attribution>
        <Title>&lt;font size=&#39;2&#39;&gt;Inclus du matériel © &lt;a href=&#39;http://www.cnes.fr&#39; target=&#39;_blank&#39;&gt; CNES  &lt;/a&gt; 2014, &lt;a href=&#39;http://www.astrium-geo.com&#39; target=&#39;_blank&#39;&gt;Distribution Astrium Services / Spot Image Corporation, États-Unis, tous droits réservés.&lt;/a&gt; &lt;/font&gt;</Title>
    </Attribution>
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=MEGANTIC_PLEIADES20141103"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/a4209cea-3aeb-4e64-8dab-2e2ae19dafe9"/>
        </DataURL>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="270" height="32">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=MEGANTIC_PLEIADES20141103&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="0" opaque="0" cascaded="0">
        <Name>MEGANTIC_PLEIADES20151019</Name>
        <Title>Image Pleiades-1B Lac-Mégantic - 19 octobre 2015</Title>
        <KeywordList>
            <Keyword>Image Pleiades-1B Lac-Mégantic - 19 octobre 2015</Keyword>
        </KeywordList>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-70.9442</westBoundLongitude>
            <eastBoundLongitude>-70.8145</eastBoundLongitude>
            <southBoundLatitude>45.5384</southBoundLatitude>
            <northBoundLatitude>45.6292</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-190998" miny="174405" maxx="-180632" maxy="184740" />
    <Attribution>
        <Title>&lt;font size=&#39;2&#39;&gt;Inclus du matériel © &lt;a href=&#39;http://www.cnes.fr&#39; target=&#39;_blank&#39;&gt; CNES  &lt;/a&gt; 2014, &lt;a href=&#39;http://www.astrium-geo.com&#39; target=&#39;_blank&#39;&gt;Distribution Astrium Services / Spot Image Corporation, États-Unis, tous droits réservés.&lt;/a&gt; &lt;/font&gt;</Title>
    </Attribution>
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=MEGANTIC_PLEIADES20151019"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/a4209cea-3aeb-4e64-8dab-2e2ae19dafe9"/>
        </DataURL>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="263" height="32">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=MEGANTIC_PLEIADES20151019&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="0" opaque="0" cascaded="0">
        <Name>MEGANTIC_PLEIADES20160424</Name>
        <Title>Image Pleiades Lac-Mégantic - 24 avril 2016</Title>
        <KeywordList>
            <Keyword>Image Pleiades Lac-Mégantic - 24 avril 2016</Keyword>
        </KeywordList>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-70.9442</westBoundLongitude>
            <eastBoundLongitude>-70.8145</eastBoundLongitude>
            <southBoundLatitude>45.5384</southBoundLatitude>
            <northBoundLatitude>45.6292</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-190998" miny="174405" maxx="-180632" maxy="184740" />
    <Attribution>
        <Title>&lt;font size=&#39;2&#39;&gt;Inclus du matériel © &lt;a href=&#39;http://www.cnes.fr&#39; target=&#39;_blank&#39;&gt; CNES  &lt;/a&gt; 2014, &lt;a href=&#39;http://www.astrium-geo.com&#39; target=&#39;_blank&#39;&gt;Distribution Astrium Services / Spot Image Corporation, États-Unis, tous droits réservés.&lt;/a&gt; &lt;/font&gt;</Title>
    </Attribution>
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=MEGANTIC_PLEIADES20160424"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/a4209cea-3aeb-4e64-8dab-2e2ae19dafe9"/>
        </DataURL>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="223" height="32">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=MEGANTIC_PLEIADES20160424&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="0" opaque="0" cascaded="0">
        <Name>MEGANTIC_KOMSAT_20170504</Name>
        <Title>Image Kompsat Lac-Mégantic - 5 mai 2017</Title>
        <KeywordList>
            <Keyword>Image Kompsat Lac-Mégantic - 5 mai 2017</Keyword>
        </KeywordList>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-70.9445</westBoundLongitude>
            <eastBoundLongitude>-70.8142</eastBoundLongitude>
            <southBoundLatitude>45.5382</southBoundLatitude>
            <northBoundLatitude>45.6294</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-191024" miny="174378" maxx="-180606" maxy="184764" />
    <Attribution>
        <Title>&lt;font size=&#39;2&#39;&gt;Inclus du matériel &lt;a href=&#39;http://www.si-imaging.com/products/&#39; target=&#39;_blank&#39;&gt; ©KARI 2017&lt;/a&gt;, Distribution (SI Imaging Services, République de Corée), tous droits réservés.&lt;/a&gt; &lt;/font&gt;</Title>
    </Attribution>
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=MEGANTIC_KOMSAT_20170504"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/accident-lac-megantic-images-satellites-pleiades-apres-lincident"/>
        </DataURL>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="305" height="32">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=MEGANTIC_KOMSAT_20170504&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
    </Layer>
    <Layer queryable="1">
<!-- WARNING: The layer name 'MSP/Securite civile/Securite civile' might contain spaces or invalid characters or may start with a number. This could lead to potential problems. -->
      <Name>MSP/Securite civile/Securite civile</Name>
      <Title>Sécurité publique/Sécurité civile et incendie/Sécurité civile</Title>
      <Abstract>MSP/Securite civile/Securite civile</Abstract>
    <Style>
       <Name>default</Name>
       <Title>default</Title>
       <LegendURL width="149" height="140">
          <Format>image/png</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=MSP/Securite civile/Securite civile&amp;format=image/png&amp;STYLE=default"/>
       </LegendURL>
    </Style>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>MSP_DIRECTION_REG_COG_P_V</Name>
        <Title>Bureaux régionaux de la sécurité civile et de la sécurité incendie</Title>
        <Abstract>Bureaux régionaux de la sécurité civile et de la sécurité incendie</Abstract>
        <KeywordList>
            <Keyword>Bureaux régionaux de la sécurité civile et de la sécurité incendie</Keyword>
        </KeywordList>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=MSP_DIRECTION_REG_COG_P_V"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/80a9b8e6-6426-44df-bffa-4f02065b81e3"/>
        </DataURL>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="148" height="32">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=MSP_DIRECTION_REG_COG_P_V&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
        <MinScaleDenominator>1</MinScaleDenominator>
        <MaxScaleDenominator>7e+06</MaxScaleDenominator>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>MSP_DIRECTION_REG_COG_S</Name>
        <Title>Limites territoriales (MSP)</Title>
        <Abstract>Direction régionale du MSP (Source : MSP)</Abstract>
        <KeywordList>
            <Keyword>Limites territoriales (MSP)</Keyword>
        </KeywordList>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:3799</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:2036"
                    minx="7.16155e+06" miny="1.24112e+06" maxx="9.5362e+06" maxy="3.51614e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=MSP_DIRECTION_REG_COG_S"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/583b35e2-e513-429b-82c3-d268e66b859d"/>
        </DataURL>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="148" height="32">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=MSP_DIRECTION_REG_COG_S&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>MSP_ORG_SAUVETAGE_GEO_P</Name>
        <Title>Organismes de sauvetage</Title>
        <Abstract>Organismes de sauvetage</Abstract>
        <KeywordList>
            <Keyword></Keyword>
        </KeywordList>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=MSP_ORG_SAUVETAGE_GEO_P"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/2d485e34-356c-4d66-99e9-9baf1eade1a2"/>
        </DataURL>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="149" height="32">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=MSP_ORG_SAUVETAGE_GEO_P&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
        <MinScaleDenominator>2000</MinScaleDenominator>
        <MaxScaleDenominator>7e+06</MaxScaleDenominator>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>MSP_ADM_ALERTE_MRC_GENERAL_S</Name>
        <Title>Zone alerte MRC (MSP)</Title>
        <Abstract>(1/400 000)</Abstract>
        <KeywordList>
            <Keyword></Keyword>
        </KeywordList>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-1.1e+06</westBoundLongitude>
            <eastBoundLongitude>1.1e+06</eastBoundLongitude>
            <southBoundLatitude>-23500</southBoundLatitude>
            <northBoundLatitude>2.2535e+06</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="0" miny="0" maxx="0" maxy="0" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=MSP_ADM_ALERTE_MRC_GENERAL_S"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/zones-dalerte-quebecoises-systeme-national-dalertes-au-public"/>
        </DataURL>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="72" height="32">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=MSP_ADM_ALERTE_MRC_GENERAL_S&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
        <MinScaleDenominator>1</MinScaleDenominator>
        <MaxScaleDenominator>1e+07</MaxScaleDenominator>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>MSP_ADM_ALERTE_MUN_PRECIS_S</Name>
        <Title>Zone alerte municipale (MSP)</Title>
        <Abstract>(1/400 000)</Abstract>
        <KeywordList>
            <Keyword></Keyword>
        </KeywordList>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-1.1e+06</westBoundLongitude>
            <eastBoundLongitude>1.1e+06</eastBoundLongitude>
            <southBoundLatitude>-23500</southBoundLatitude>
            <northBoundLatitude>2.2535e+06</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="0" miny="0" maxx="0" maxy="0" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=MSP_ADM_ALERTE_MUN_PRECIS_S"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/zones-dalerte-quebecoises-systeme-national-dalertes-au-public"/>
        </DataURL>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="72" height="32">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=MSP_ADM_ALERTE_MUN_PRECIS_S&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
        <MinScaleDenominator>1</MinScaleDenominator>
        <MaxScaleDenominator>1e+07</MaxScaleDenominator>
      </Layer>
    </Layer>
    <Layer queryable="1">
<!-- WARNING: The layer name 'MSP/Securite civile/Incendie' might contain spaces or invalid characters or may start with a number. This could lead to potential problems. -->
      <Name>MSP/Securite civile/Incendie</Name>
      <Title>Sécurité publique/Sécurité civile et incendie/Sécurité incendie</Title>
      <Abstract>MSP/Securite civile/Incendie</Abstract>
    <Style>
       <Name>default</Name>
       <Title>default</Title>
       <LegendURL width="86" height="32">
          <Format>image/png</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=MSP/Securite civile/Incendie&amp;format=image/png&amp;STYLE=default"/>
       </LegendURL>
    </Style>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>CASERNE</Name>
        <Title>Casernes de pompiers</Title>
        <Abstract>Casernes de Pompiers (Source : MSP)</Abstract>
        <KeywordList>
            <Keyword></Keyword>
        </KeywordList>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=CASERNE"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/31a13f95-e506-43ff-9e4b-219d900409ae"/>
        </DataURL>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="86" height="32">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=CASERNE&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
        <MaxScaleDenominator>2e+06</MaxScaleDenominator>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>MSP_BORNE_INC_MUN_P</Name>
        <Title>Bornes d&#39;incendie</Title>
        <Abstract>Bornes d&#39;incendie (Source : MSP)</Abstract>
        <KeywordList>
            <Keyword>fontaine</Keyword>
            <Keyword>feu</Keyword>
            <Keyword>pompier</Keyword>
            <Keyword>borne-fontaine</Keyword>
        </KeywordList>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=MSP_BORNE_INC_MUN_P"/>
        </MetadataURL>
        <DataURL>
          <Format>igo</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://intranet.donnees.qc/data/fr/dataset/bornes-incendie-municipales"/>
        </DataURL>
        <Style>
          <Name>avec_couleur</Name>
          <Title>avec_couleur</Title>
          <LegendURL width="37" height="5">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=MSP_BORNE_INC_MUN_P&amp;format=image/png&amp;STYLE=avec_couleur"/>
          </LegendURL>
        </Style>
        <MinScaleDenominator>1</MinScaleDenominator>
        <MaxScaleDenominator>225000</MaxScaleDenominator>
      </Layer>
    </Layer>
    <Layer queryable="1">
<!-- WARNING: The layer name 'MSP/SQ' might contain spaces or invalid characters or may start with a number. This could lead to potential problems. -->
      <Name>MSP/SQ</Name>
      <Title>Sécurité publique/Police</Title>
      <Abstract>MSP/SQ</Abstract>
    <Style>
       <Name>default</Name>
       <Title>default</Title>
       <LegendURL width="347" height="302">
          <Format>image/png</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=MSP/SQ&amp;format=image/png&amp;STYLE=default"/>
       </LegendURL>
    </Style>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>SQ_LADPQ_20K_REPARTITION_S</Name>
        <Title>Couvertures SQ</Title>
        <Abstract>Couverture de la police de la Sûreté du Québec (Source : Surêté du QC)</Abstract>
        <KeywordList>
            <Keyword>police</Keyword>
            <Keyword>municipal</Keyword>
            <Keyword>sureté</Keyword>
            <Keyword>corps</Keyword>
            <Keyword>sq</Keyword>
            <Keyword>surete du quebec</Keyword>
            <Keyword>couverture</Keyword>
        </KeywordList>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=SQ_LADPQ_20K_REPARTITION_S"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://intranet.donnees.qc/data/dataset/couverture-sq"/>
        </DataURL>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="124" height="32">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=SQ_LADPQ_20K_REPARTITION_S&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>SQ_BUREAUX</Name>
        <Title>Postes de police (SQ)</Title>
        <KeywordList>
            <Keyword>police</Keyword>
            <Keyword>sureté</Keyword>
            <Keyword>SQ</Keyword>
            <Keyword>poste</Keyword>
            <Keyword>bureau</Keyword>
        </KeywordList>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-1.1e+06</westBoundLongitude>
            <eastBoundLongitude>1.1e+06</eastBoundLongitude>
            <southBoundLatitude>-23500</southBoundLatitude>
            <northBoundLatitude>2.2535e+06</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="0" miny="0" maxx="0" maxy="0" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=SQ_BUREAUX"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/desserte-surete-du-quebec/resource/48cb17de-3013-4147-846e-b602702a6c67"/>
        </DataURL>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="143" height="32">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=SQ_BUREAUX&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
        <MinScaleDenominator>1000</MinScaleDenominator>
        <MaxScaleDenominator>7e+06</MaxScaleDenominator>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>SQ_TERRITOIRE_AUTOROUTIER</Name>
        <Title>Territoires autoroutiers (SQ)</Title>
        <KeywordList>
            <Keyword>poste</Keyword>
            <Keyword> routier</Keyword>
            <Keyword> sq</Keyword>
            <Keyword> police</Keyword>
            <Keyword> provinciale</Keyword>
            <Keyword> sûreté</Keyword>
            <Keyword> québec</Keyword>
            <Keyword> autoroutier</Keyword>
        </KeywordList>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-1.1e+06</westBoundLongitude>
            <eastBoundLongitude>1.1e+06</eastBoundLongitude>
            <southBoundLatitude>-23500</southBoundLatitude>
            <northBoundLatitude>2.2535e+06</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="0" miny="0" maxx="0" maxy="0" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=SQ_TERRITOIRE_AUTOROUTIER"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/desserte-surete-du-quebec/resource/56c0f8c8-bece-45fb-aa47-daf5d7d69ac8"/>
        </DataURL>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="155" height="32">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=SQ_TERRITOIRE_AUTOROUTIER&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
        <MinScaleDenominator>1000</MinScaleDenominator>
        <MaxScaleDenominator>2e+06</MaxScaleDenominator>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>SQ_TERRITOIRE_CSMRC</Name>
        <Title>Territoire des centres de services MRC (SQ)</Title>
        <KeywordList>
            <Keyword>poste</Keyword>
            <Keyword> police</Keyword>
            <Keyword> mrc</Keyword>
            <Keyword> autoroutier</Keyword>
        </KeywordList>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-1.1e+06</westBoundLongitude>
            <eastBoundLongitude>1.1e+06</eastBoundLongitude>
            <southBoundLatitude>-23500</southBoundLatitude>
            <northBoundLatitude>2.2535e+06</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="0" miny="0" maxx="0" maxy="0" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=SQ_TERRITOIRE_CSMRC"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/desserte-surete-du-quebec/resource/bcefe119-db45-4c7e-8abe-2b7301fa1f77"/>
        </DataURL>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="133" height="32">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=SQ_TERRITOIRE_CSMRC&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
        <MinScaleDenominator>1</MinScaleDenominator>
        <MaxScaleDenominator>2e+07</MaxScaleDenominator>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>SQ_TERRITOIRE_REGION</Name>
        <Title>Limite régionale (SQ)</Title>
        <Abstract>Poste complémentaire (1/2 000 000) (Source : Surêté du Qc)</Abstract>
        <KeywordList>
            <Keyword></Keyword>
        </KeywordList>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-1.1e+06</westBoundLongitude>
            <eastBoundLongitude>1.1e+06</eastBoundLongitude>
            <southBoundLatitude>-23500</southBoundLatitude>
            <northBoundLatitude>2.2535e+06</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="0" miny="0" maxx="0" maxy="0" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=SQ_TERRITOIRE_REGION"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/desserte-surete-du-quebec/resource/86c5b552-0d51-4e6b-bc85-0aad39c9ba8f"/>
        </DataURL>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="129" height="32">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=SQ_TERRITOIRE_REGION&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
        <MinScaleDenominator>1</MinScaleDenominator>
        <MaxScaleDenominator>2e+07</MaxScaleDenominator>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>SQ_TERRITOIRE_DISTRICT</Name>
        <Title>Territoire district</Title>
        <KeywordList>
            <Keyword>district</Keyword>
            <Keyword> police</Keyword>
            <Keyword> sq</Keyword>
            <Keyword> québec</Keyword>
            <Keyword> sûreté</Keyword>
            <Keyword> proviciale</Keyword>
            <Keyword> desserte</Keyword>
            <Keyword> couverture</Keyword>
            <Keyword> territoire</Keyword>
        </KeywordList>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-1.1e+06</westBoundLongitude>
            <eastBoundLongitude>1.1e+06</eastBoundLongitude>
            <southBoundLatitude>-23500</southBoundLatitude>
            <northBoundLatitude>2.2535e+06</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="0" miny="0" maxx="0" maxy="0" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=SQ_TERRITOIRE_DISTRICT"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/desserte-surete-du-quebec/resource/1d3ef8aa-53d8-4f49-a578-4eafe357ed07"/>
        </DataURL>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="77" height="32">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=SQ_TERRITOIRE_DISTRICT&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>SQ_TERRITOIRE_POSTES_AUX</Name>
        <Title>Territoires des postes auxiliaires (SQ)</Title>
        <KeywordList>
            <Keyword>district</Keyword>
            <Keyword> couverture</Keyword>
            <Keyword> territoire</Keyword>
            <Keyword> desserte</Keyword>
            <Keyword> auxilière</Keyword>
            <Keyword> complémentaire</Keyword>
            <Keyword> mrc</Keyword>
            <Keyword> secondaire</Keyword>
            <Keyword> sq</Keyword>
            <Keyword> provinciale</Keyword>
            <Keyword> sûreté</Keyword>
            <Keyword> québec</Keyword>
        </KeywordList>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-1.1e+06</westBoundLongitude>
            <eastBoundLongitude>1.1e+06</eastBoundLongitude>
            <southBoundLatitude>-23500</southBoundLatitude>
            <northBoundLatitude>2.2535e+06</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="0" miny="0" maxx="0" maxy="0" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=SQ_TERRITOIRE_POSTES_AUX"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/desserte-surete-du-quebec/resource/56c0f8c8-bece-45fb-aa47-daf5d7d69ac8"/>
        </DataURL>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="347" height="32">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=SQ_TERRITOIRE_POSTES_AUX&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
        <MinScaleDenominator>1000</MinScaleDenominator>
        <MaxScaleDenominator>2e+06</MaxScaleDenominator>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>SQ_TERRITOIRE_POSTES_MRC</Name>
        <Title>Territoire des postes de MRC (SQ)</Title>
        <KeywordList>
            <Keyword>poste</Keyword>
            <Keyword> police</Keyword>
            <Keyword> mrc</Keyword>
            <Keyword> autoroutier</Keyword>
        </KeywordList>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-1.1e+06</westBoundLongitude>
            <eastBoundLongitude>1.1e+06</eastBoundLongitude>
            <southBoundLatitude>-23500</southBoundLatitude>
            <northBoundLatitude>2.2535e+06</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="0" miny="0" maxx="0" maxy="0" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=SQ_TERRITOIRE_POSTES_MRC"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/desserte-surete-du-quebec/resource/c8458724-455f-4678-8b40-f9eee05c4c08"/>
        </DataURL>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="218" height="113">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=SQ_TERRITOIRE_POSTES_MRC&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
        <MinScaleDenominator>1000</MinScaleDenominator>
        <MaxScaleDenominator>2e+06</MaxScaleDenominator>
      </Layer>
    </Layer>
    <Layer queryable="1">
      <Name>Transport</Name>
      <Title>Transport</Title>
      <Abstract>Transport</Abstract>
    <Style>
       <Name>default</Name>
       <Title>default</Title>
       <LegendURL width="37" height="5">
          <Format>image/png</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=Transport&amp;format=image/png&amp;STYLE=default"/>
       </LegendURL>
    </Style>
      <Layer queryable="1" opaque="0" cascaded="1">
        <Name>evenements</Name>
        <Title>Avertissements routiers</Title>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:3798</CRS>
        <CRS>EPSG:3799</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:32198</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:3857"
                    minx="-1.0043e+07" miny="5.29118e+06" maxx="-5.20778e+06" maxy="9.42263e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=evenements"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/dataset/avertissement-routier"/>
        </DataURL>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="1">
        <Name>pes_v_limtn_charg</Name>
        <Title>Limites de charge</Title>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:3798</CRS>
        <CRS>EPSG:3799</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:32198</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:3857"
                    minx="-1.0043e+07" miny="5.29118e+06" maxx="-5.20778e+06" maxy="9.42263e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=pes_v_limtn_charg"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/dataset/limite-de-charge"/>
        </DataURL>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="1">
        <Name>chantiers_mtmdet</Name>
        <Title>Chantiers de construction</Title>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:3798</CRS>
        <CRS>EPSG:3799</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:4269</CRS>
        <!-- WARNING: Optional Ex_GeographicBoundingBox could not be established for this layer.  Consider setting the EXTENT in the LAYER object, or wms_extent metadata. Also check that your data exists in the DATA statement -->
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=chantiers_mtmdet"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/chantiers-transports-quebec"/>
        </DataURL>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="1">
        <Name>radars_photos</Name>
        <Title>Emplacements des photos radars</Title>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:3798</CRS>
        <CRS>EPSG:3799</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:4269</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=radars_photos"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/dataset/radar-photo"/>
        </DataURL>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="1">
        <Name>camionnage_reseau_superieur</Name>
        <Title>Réseau de camionnage - Transports Québec</Title>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:3798</CRS>
        <CRS>EPSG:3799</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:4269</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=camionnage_reseau_superieur"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/dataset/reseau-camionnage"/>
        </DataURL>
        <MaxScaleDenominator>500000</MaxScaleDenominator>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="1">
        <Name>etablissement_mtq</Name>
        <Title>Établissements de Transports Québec</Title>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:3798</CRS>
        <CRS>EPSG:3799</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:4269</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=etablissement_mtq"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/dataset/etablissement-du-mtq"/>
        </DataURL>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="1">
        <Name>gsq_v_desc_strct_tri</Name>
        <Title>Structures sur le réseau routier - Transports Québec</Title>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:3798</CRS>
        <CRS>EPSG:3799</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:4269</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=gsq_v_desc_strct_tri"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/dataset/structure"/>
        </DataURL>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="1">
        <Name>liaison_maritime</Name>
        <Title>Liaisons maritimes (AQréseau+)</Title>
        <CRS>CRS:84</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:102100</CRS>
        <CRS>EPSG:2945</CRS>
        <CRS>EPSG:2140</CRS>
        <CRS>EPSG:2946</CRS>
        <CRS>EPSG:2141</CRS>
        <CRS>EPSG:2947</CRS>
        <CRS>EPSG:2142</CRS>
        <CRS>EPSG:2948</CRS>
        <CRS>EPSG:2143</CRS>
        <CRS>EPSG:2949</CRS>
        <CRS>EPSG:2144</CRS>
        <CRS>EPSG:2950</CRS>
        <CRS>EPSG:2145</CRS>
        <CRS>EPSG:2951</CRS>
        <CRS>EPSG:2146</CRS>
        <CRS>EPSG:2952</CRS>
        <CRS>EPSG:2147</CRS>
        <CRS>EPSG:2958</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:2959</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2960</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2961</CRS>
        <CRS>EPSG:2038</CRS>
        <CRS>EPSG:2962</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3798</CRS>
        <CRS>EPSG:3799</CRS>
        <CRS>EPSG:4267</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4617</CRS>
        <CRS>EPSG:4140</CRS>
        <CRS>EPSG:6622</CRS>
        <CRS>EPSG:6623</CRS>
        <CRS>EPSG:6624</CRS>
        <CRS>EPSG:26717</CRS>
        <CRS>EPSG:26718</CRS>
        <CRS>EPSG:26719</CRS>
        <CRS>EPSG:26720</CRS>
        <CRS>EPSG:26721</CRS>
        <CRS>EPSG:26899</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:26921</CRS>
        <CRS>EPSG:32082</CRS>
        <CRS>EPSG:32083</CRS>
        <CRS>EPSG:32084</CRS>
        <CRS>EPSG:32085</CRS>
        <CRS>EPSG:32086</CRS>
        <CRS>EPSG:32098</CRS>
        <CRS>EPSG:32182</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:102001</CRS>
        <CRS>EPSG:3573</CRS>
        <CRS>EPSG:102002</CRS>
        <CRS>EPSG:3978</CRS>
        <CRS>EPSG:3347</CRS>
        <CRS>EPSG:3979</CRS>
        <CRS>EPSG:3348</CRS>
        <CRS>EPSG:5937</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="CRS:84"
                    minx="-90.2178" miny="42.8632" maxx="-46.7822" maxy="64.2855" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=liaison_maritime"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/dataset/adresses-quebec"/>
        </DataURL>
        <MaxScaleDenominator>2.36235e+07</MaxScaleDenominator>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="1">
        <Name>port_installation</Name>
        <Title>Ports - Installations du Québec</Title>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:3798</CRS>
        <CRS>EPSG:3799</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:4269</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=port_installation"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/port-installation"/>
        </DataURL>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="1">
        <Name>parc_routier</Name>
        <Title>Parcs routiers</Title>
        <KeywordList>
            <Keyword>Haltes</Keyword>
            <Keyword> parcs</Keyword>
            <Keyword> aires</Keyword>
            <Keyword>services</Keyword>
            <Keyword>belvédère</Keyword>
            <Keyword>relais</Keyword>
            <Keyword>repos</Keyword>
            <Keyword>camionneurs</Keyword>
            <Keyword>villégiature</Keyword>
        </KeywordList>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:3798</CRS>
        <CRS>EPSG:3799</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:4269</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=parc_routier"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/parc-routier"/>
        </DataURL>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="1">
        <Name>reseau_chfer_qc</Name>
        <Title>Réseau ferroviaire du Québec</Title>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:3798</CRS>
        <CRS>EPSG:3799</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:4269</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=reseau_chfer_qc"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/dataset/reseau-ferroviaire"/>
        </DataURL>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="1">
        <Name>sortie_aut</Name>
        <Title>Sorties d&#39;autoroute (AQréseau+)</Title>
        <CRS>CRS:84</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:102100</CRS>
        <CRS>EPSG:2945</CRS>
        <CRS>EPSG:2140</CRS>
        <CRS>EPSG:2946</CRS>
        <CRS>EPSG:2141</CRS>
        <CRS>EPSG:2947</CRS>
        <CRS>EPSG:2142</CRS>
        <CRS>EPSG:2948</CRS>
        <CRS>EPSG:2143</CRS>
        <CRS>EPSG:2949</CRS>
        <CRS>EPSG:2144</CRS>
        <CRS>EPSG:2950</CRS>
        <CRS>EPSG:2145</CRS>
        <CRS>EPSG:2951</CRS>
        <CRS>EPSG:2146</CRS>
        <CRS>EPSG:2952</CRS>
        <CRS>EPSG:2147</CRS>
        <CRS>EPSG:2958</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:2959</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2960</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2961</CRS>
        <CRS>EPSG:2038</CRS>
        <CRS>EPSG:2962</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3798</CRS>
        <CRS>EPSG:3799</CRS>
        <CRS>EPSG:4267</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4617</CRS>
        <CRS>EPSG:4140</CRS>
        <CRS>EPSG:6622</CRS>
        <CRS>EPSG:6623</CRS>
        <CRS>EPSG:6624</CRS>
        <CRS>EPSG:26717</CRS>
        <CRS>EPSG:26718</CRS>
        <CRS>EPSG:26719</CRS>
        <CRS>EPSG:26720</CRS>
        <CRS>EPSG:26721</CRS>
        <CRS>EPSG:26899</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:26921</CRS>
        <CRS>EPSG:32082</CRS>
        <CRS>EPSG:32083</CRS>
        <CRS>EPSG:32084</CRS>
        <CRS>EPSG:32085</CRS>
        <CRS>EPSG:32086</CRS>
        <CRS>EPSG:32098</CRS>
        <CRS>EPSG:32182</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:102001</CRS>
        <CRS>EPSG:3573</CRS>
        <CRS>EPSG:102002</CRS>
        <CRS>EPSG:3978</CRS>
        <CRS>EPSG:3347</CRS>
        <CRS>EPSG:3979</CRS>
        <CRS>EPSG:3348</CRS>
        <CRS>EPSG:5937</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="CRS:84"
                    minx="-90.2178" miny="42.8632" maxx="-46.7822" maxy="64.2855" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=sortie_aut"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/dataset/adresses-quebec"/>
        </DataURL>
        <MaxScaleDenominator>23623</MaxScaleDenominator>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="1">
        <Name>zones_degel</Name>
        <Title>Zones de dégel - Transports Québec</Title>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:3798</CRS>
        <CRS>EPSG:3799</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:4269</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=zones_degel"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/dataset/zone-de-degel"/>
        </DataURL>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="1">
        <Name>bgr_v_centr_servc_geomt_act</Name>
        <Title>Limites des centres de service - Transports Québec</Title>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:3798</CRS>
        <CRS>EPSG:3799</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:4269</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=bgr_v_centr_servc_geomt_act"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/dataset/territoire-administratif"/>
        </DataURL>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="1">
        <Name>bgr_v_dirct_terrt_geomt_act</Name>
        <Title>Directions générales - Transports Québec</Title>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:3798</CRS>
        <CRS>EPSG:3799</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:4269</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=bgr_v_dirct_terrt_geomt_act"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/dataset/territoire-administratif"/>
        </DataURL>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="1">
        <Name>bgr_v_dirct_genrl_geomt_act</Name>
        <Title>Sous-ministériat aux territoires - Transports Québec</Title>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:3798</CRS>
        <CRS>EPSG:3799</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:4269</CRS>
        <!-- WARNING: Optional Ex_GeographicBoundingBox could not be established for this layer.  Consider setting the EXTENT in the LAYER object, or wms_extent metadata. Also check that your data exists in the DATA statement -->
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=bgr_v_dirct_genrl_geomt_act"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/dataset/territoire-administratif"/>
        </DataURL>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="1">
        <Name>villagerelais</Name>
        <Title>Villages-relais par Transports Québec</Title>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:3798</CRS>
        <CRS>EPSG:3799</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:4269</CRS>
        <!-- WARNING: Optional Ex_GeographicBoundingBox could not be established for this layer.  Consider setting the EXTENT in the LAYER object, or wms_extent metadata. Also check that your data exists in the DATA statement -->
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=villagerelais"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/dataset/village-relais"/>
        </DataURL>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="1">
        <Name>repere_km</Name>
        <Title>Repères kilométriques (MTQ-SWTQ)</Title>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:3798</CRS>
        <CRS>EPSG:3799</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:4269</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=repere_km"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/dataset/repere-kilometrique"/>
        </DataURL>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="1">
        <Name>aeroport_piste</Name>
        <Title>Aéroports - Pistes du Québec</Title>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:3798</CRS>
        <CRS>EPSG:3799</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:4269</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=aeroport_piste"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/dataset/aeroport-piste"/>
        </DataURL>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="1">
        <Name>bgr_v_sous_route_res_sup_act</Name>
        <Title>Système de référence linéaire - Transports Québec</Title>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:3798</CRS>
        <CRS>EPSG:3799</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:4269</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=bgr_v_sous_route_res_sup_act"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/dataset/reseau-routier-rtss"/>
        </DataURL>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="1">
        <Name>zpegt_cgt_s</Name>
        <Title>Zones potentiellement exposées aux glissements de terrain (ZPEGT) (polygone)</Title>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:3798</CRS>
        <CRS>EPSG:3799</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:4269</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=zpegt_cgt_s"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/dataset/zone-potentiellement-exposee-aux-glissements-de-terrain-zpegt"/>
        </DataURL>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="1">
        <Name>zpegt_cgt_l</Name>
        <Title>Zones potentiellement exposées aux glissements de terrain (ZPEGT) (ligne)</Title>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:3798</CRS>
        <CRS>EPSG:3799</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:4269</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=zpegt_cgt_l"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/dataset/zone-potentiellement-exposee-aux-glissements-de-terrain-zpegt"/>
        </DataURL>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="1">
        <Name>lieuhabite</Name>
        <Title>Lieux habités du Québec</Title>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:900913</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:3857</CRS>
        <!-- WARNING: Optional Ex_GeographicBoundingBox could not be established for this layer.  Consider setting the EXTENT in the LAYER object, or wms_extent metadata. Also check that your data exists in the DATA statement -->
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=lieuhabite"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/dataset/lieu-habite"/>
        </DataURL>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="1">
        <Name>aeroport</Name>
        <Title>Aéroports - Aérogares du Québec</Title>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:3798</CRS>
        <CRS>EPSG:3799</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:4269</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=aeroport"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/dataset/aeroport"/>
        </DataURL>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="1">
        <Name>telephone_urg</Name>
        <Title>Téléphones de secours - Transports Québec</Title>
        <Abstract>Téléphones de secours (Source : MTQ)</Abstract>
        <KeywordList>
            <Keyword>Téléphones de secours (secteur routier)</Keyword>
        </KeywordList>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:3798</CRS>
        <CRS>EPSG:3799</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:4269</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=telephone_urg"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/dataset/telephone-durgence"/>
        </DataURL>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="1">
        <Name>circulation_routier</Name>
        <Title>Débits de circulation - Transports Québec</Title>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:3798</CRS>
        <CRS>EPSG:3799</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:4269</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=circulation_routier"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/dataset/debit-de-circulation"/>
        </DataURL>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="1">
        <Name>convi_velo_glv</Name>
        <Title>Convivialité des routes pour les cyclistes - Transports Québec</Title>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:3798</CRS>
        <CRS>EPSG:3799</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:4269</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=convi_velo_glv"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/dataset/convivialite-velo"/>
        </DataURL>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="1">
        <Name>stations_meteoroutieres</Name>
        <Title>Stations météoroutières - Transports Québec</Title>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:900913</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:3857</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=stations_meteoroutieres"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/dataset/station-meteoroutiere"/>
        </DataURL>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="1">
        <Name>histo_stations_meteoroutieres</Name>
        <Title>Archives - Stations météoroutières - Transports Québec</Title>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:900913</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:3857</CRS>
        <!-- WARNING: Optional Ex_GeographicBoundingBox could not be established for this layer.  Consider setting the EXTENT in the LAYER object, or wms_extent metadata. Also check that your data exists in the DATA statement -->
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=histo_stations_meteoroutieres"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/dataset/station-meteoroutiere"/>
        </DataURL>
      </Layer>
    </Layer>
    <Layer queryable="1">
      <Name>MELS</Name>
      <Title>Éducation</Title>
      <Abstract>MELS</Abstract>
    <Style>
       <Name>default</Name>
       <Title>default</Title>
       <LegendURL width="37" height="5">
          <Format>image/png</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=MELS&amp;format=image/png&amp;STYLE=default"/>
       </LegendURL>
    </Style>
      <Layer queryable="1" opaque="0" cascaded="1">
        <Name>MELS_SCOL_COLLEGIAL_P</Name>
        <Title>Établissement scolaire collégial</Title>
        <Abstract>Établissement scolaire (1/1 000 000) (Source : Ministère de l&#39;Éducation du Qc)</Abstract>
        <KeywordList>
            <Keyword>collégial CEGEP</Keyword>
        </KeywordList>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=MELS_SCOL_COLLEGIAL_P"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/territoires-des-commissions-scolaires-du-quebec"/>
        </DataURL>
        <MaxScaleDenominator>3e+06</MaxScaleDenominator>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="1">
        <Name>INFRA_SCOL_GOUVERNEMENTAL_P</Name>
        <Title>Établissement scolaire gouvernemental</Title>
        <Abstract>Établissement scolaire gouvernemental (1/1 000 000) (Source : Ministère de l&#39;Éducation du Qc)</Abstract>
        <KeywordList>
            <Keyword>Gabarit</Keyword>
        </KeywordList>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=INFRA_SCOL_GOUVERNEMENTAL_P"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/localisation-des-etablissements-d-enseignement-du-reseau-scolaire-au-quebec"/>
        </DataURL>
        <MaxScaleDenominator>3e+06</MaxScaleDenominator>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="1">
        <Name>INFRA_SCOL_PPS_PRIVE_P</Name>
        <Title>Établissement scolaire privé (préscolaire, primaire et secondaire)</Title>
        <Abstract>Établissement scolaire PPS privé (1/1 000 000) (Source : Ministère de l&#39;Éducation du Qc)</Abstract>
        <KeywordList>
            <Keyword>Gabarit</Keyword>
        </KeywordList>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:4326</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:3857"
                    minx="-1.0043e+07" miny="5.29118e+06" maxx="-5.20778e+06" maxy="9.42263e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=INFRA_SCOL_PPS_PRIVE_P"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/localisation-des-etablissements-d-enseignement-du-reseau-scolaire-au-quebec"/>
        </DataURL>
        <MaxScaleDenominator>3e+06</MaxScaleDenominator>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="1">
        <Name>INFRA_SCOL_PPS_PUBLIC_P</Name>
        <Title>Établissement scolaire public (préscolaire, primaire et secondaire)</Title>
        <Abstract>Établissement scolaire PPS public (1/1 000 000) (Source : Ministère de l&#39;Éducation du Qc)</Abstract>
        <KeywordList>
            <Keyword>Gabarit</Keyword>
        </KeywordList>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:4326</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:3857"
                    minx="-1.0043e+07" miny="5.29118e+06" maxx="-5.20778e+06" maxy="9.42263e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=INFRA_SCOL_PPS_PUBLIC_P"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/localisation-des-etablissements-d-enseignement-du-reseau-scolaire-au-quebec"/>
        </DataURL>
        <MaxScaleDenominator>3e+06</MaxScaleDenominator>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="1">
        <Name>MELS_SCOL_UNIVERSITAIRE_P</Name>
        <Title>Établissement scolaire universitaire</Title>
        <Abstract>Établissement scolaire universitaire (1/1 000 000) (Source : Ministère de l&#39;Éducation du Qc)</Abstract>
        <KeywordList>
            <Keyword>Gabarit</Keyword>
        </KeywordList>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=MELS_SCOL_UNIVERSITAIRE_P"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/territoires-des-commissions-scolaires-du-quebec"/>
        </DataURL>
        <MaxScaleDenominator>3e+06</MaxScaleDenominator>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="1">
        <Name>MELS_CS_ANGLO_S</Name>
        <Title>Commissions scolaires anglophones</Title>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=MELS_CS_ANGLO_S"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/territoires-des-commissions-scolaires-du-quebec"/>
        </DataURL>
        <MaxScaleDenominator>3e+06</MaxScaleDenominator>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="1">
        <Name>MELS_CS_FRANCO_S</Name>
        <Title>Commissions scolaires francophones</Title>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=MELS_CS_FRANCO_S"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/territoires-des-commissions-scolaires-du-quebec"/>
        </DataURL>
        <MaxScaleDenominator>3e+06</MaxScaleDenominator>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="1">
        <Name>MELS_CS_PARTICULIER_S</Name>
        <Title>Commissions scolaires à statuts particuliers</Title>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=MELS_CS_PARTICULIER_S"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/territoires-des-commissions-scolaires-du-quebec"/>
        </DataURL>
        <MaxScaleDenominator>3e+06</MaxScaleDenominator>
      </Layer>
    </Layer>
    <Layer>
      <Name>temperaturesurface</Name>
      <Title>Couverture terrestre/Température de surface</Title>
      <Abstract>temperaturesurface</Abstract>
    <Style>
       <Name>default</Name>
       <Title>default</Title>
       <LegendURL width="102" height="356">
          <Format>image/png</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=temperaturesurface&amp;format=image/png&amp;STYLE=default"/>
       </LegendURL>
    </Style>
      <Layer queryable="0" opaque="0" cascaded="0">
        <Name>inspq_temperature_surface</Name>
        <Title>Température de surface</Title>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
    <Attribution>
        <Title>&lt;a href=&#39;http://www.donnees.gouv.qc.ca/?node=/donnees-details&amp;id=2f4294b5-8489-4630-96a1-84da590f02ee&#39; target=&#39;_blank&#39;&gt;CERFO-INSPQ&lt;/a&gt;</Title>
    </Attribution>
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=inspq_temperature_surface"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/ilots-de-chaleur-fraicheur-urbains-et-temperature-de-surface"/>
        </DataURL>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="102" height="248">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=inspq_temperature_surface&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="0" opaque="0" cascaded="0">
        <Name>inspq_ilot_chaleur</Name>
        <Title>Ilots de chaleur urbains</Title>
        <Abstract>Ilots de chaleur défini par le cerfo</Abstract>
        <KeywordList>
            <Keyword>Ilots de chaleur</Keyword>
        </KeywordList>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
    <Attribution>
        <Title>&lt;a href=&#39;http://www.donnees.gouv.qc.ca/?node=/donnees-details&amp;id=2f4294b5-8489-4630-96a1-84da590f02ee&#39; target=&#39;_blank&#39;&gt;CERFO-INSPQ&lt;/a&gt;</Title>
    </Attribution>
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=inspq_ilot_chaleur"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/ilots-de-chaleur-fraicheur-urbains-et-temperature-de-surface"/>
        </DataURL>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="102" height="59">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=inspq_ilot_chaleur&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="0" opaque="0" cascaded="0">
        <Name>inspq_ilot_fraicheur</Name>
        <Title>Ilots de fraicheur urbains</Title>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
    <Attribution>
        <Title>&lt;a href=&#39;http://www.donnees.gouv.qc.ca/?node=/donnees-details&amp;id=2f4294b5-8489-4630-96a1-84da590f02ee&#39; target=&#39;_blank&#39;&gt;CERFO-INSPQ&lt;/a&gt;</Title>
    </Attribution>
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=inspq_ilot_fraicheur"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/ilots-de-chaleur-fraicheur-urbains-et-temperature-de-surface"/>
        </DataURL>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="90" height="59">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=inspq_ilot_fraicheur&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
    </Layer>
    <Layer queryable="1">
      <Name>inddef_nat_2011</Name>
      <Title>Population/Indice de défavorisation 2011 national</Title>
      <Abstract>inddef_nat_2011</Abstract>
    <Style>
       <Name>default</Name>
       <Title>default</Title>
       <LegendURL width="373" height="653">
          <Format>image/png</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=inddef_nat_2011&amp;format=image/png&amp;STYLE=default"/>
       </LegendURL>
    </Style>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>national_2011_combine</Name>
        <Title>Défavorisation combinée 2011 - National (Reg. 1)</Title>
        <Abstract>L&#39;indice de défavorisation défini à l&#39;échelle du Québec a été adapté pour permettre son utilisation dans lévaluation de l&#39;effet des inégalités sociales sur l&#39;utilisation des services sur une base régionale.</Abstract>
        <KeywordList>
            <Keyword>Défavorisation</Keyword>
        </KeywordList>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=national_2011_combine"/>
        </MetadataURL>
<!-- WARNING: Some mandatory elements for 'DataURL' are missing in this context. -->
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="312" height="167">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=national_2011_combine&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>national_2011_combine_reg2</Name>
        <Title>Défavorisation combinée 2011 - National (Reg. 2)</Title>
        <Abstract>L&#39;indice de défavorisation défini à l’échelle du Québec a été adapté pour permettre son utilisation dans l&#39;évaluation de l&#39;effet des inégalités sociales sur l&#39;utilisation des services sur une base régionale.</Abstract>
        <KeywordList>
            <Keyword>Défavorisation</Keyword>
        </KeywordList>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=national_2011_combine_reg2"/>
        </MetadataURL>
<!-- WARNING: Some mandatory elements for 'DataURL' are missing in this context. -->
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="373" height="167">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=national_2011_combine_reg2&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>national_2011_materielle</Name>
        <Title>Défavorisation matérielle 2011 - National</Title>
        <Abstract>L&#39;indice de défavorisation défini à l’échelle du Québec a été adapté pour permettre son utilisation dans l&#39;évaluation de l&#39;effet des inégalités sociales sur l&#39;utilisation des services sur une base nationale.</Abstract>
        <KeywordList>
            <Keyword>Défavorisation</Keyword>
        </KeywordList>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=national_2011_materielle"/>
        </MetadataURL>
<!-- WARNING: Some mandatory elements for 'DataURL' are missing in this context. -->
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="183" height="167">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=national_2011_materielle&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>national_2011_sociale</Name>
        <Title>Défavorisation sociale 2011 - National</Title>
        <Abstract>L&#39;indice de défavorisation défini à l’échelle du Québec a été adapté pour permettre son utilisation dans l&#39;évaluation de l&#39;effet des inégalités sociales sur l&#39;utilisation des services sur une base régionale.</Abstract>
        <KeywordList>
            <Keyword>Défavorisation</Keyword>
        </KeywordList>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=national_2011_sociale"/>
        </MetadataURL>
<!-- WARNING: Some mandatory elements for 'DataURL' are missing in this context. -->
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="183" height="167">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=national_2011_sociale&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
    </Layer>
    <Layer queryable="1">
      <Name>inddef_reg_2011</Name>
      <Title>Population/Indice de défavorisation 2011 régional</Title>
      <Abstract>inddef_reg_2011</Abstract>
    <Style>
       <Name>default</Name>
       <Title>default</Title>
       <LegendURL width="373" height="653">
          <Format>image/png</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=inddef_reg_2011&amp;format=image/png&amp;STYLE=default"/>
       </LegendURL>
    </Style>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>regional_2011_combine</Name>
        <Title>Défavorisation combinée 2011 - Régional (Reg. 1)</Title>
        <Abstract>L&#39;indice de défavorisation défini à l’échelle du Québec a été adapté pour permettre son utilisation dans l&#39;évaluation de l&#39;effet des inégalités sociales sur l&#39;utilisation des services sur une base régionale. Cette version régionale de l&#39;indice national reprend les deux mêmes formes de la défavorisation, soit matérielle et sociale, mais exprime cette fois les écarts observés à l&#39;échelle de chaque région sociosanitaire et non plus à l&#39;échelle de l&#39;ensemble du Québec.</Abstract>
        <KeywordList>
            <Keyword>Défavorisation</Keyword>
        </KeywordList>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=regional_2011_combine"/>
        </MetadataURL>
<!-- WARNING: Some mandatory elements for 'DataURL' are missing in this context. -->
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="312" height="167">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=regional_2011_combine&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>regional_2011_combine_reg2</Name>
        <Title>Défavorisation combinée 2011 - Régional (Reg. 2)</Title>
        <Abstract>L&#39;indice de défavorisation défini à l’échelle du Québec a été adapté pour permettre son utilisation dans l&#39;évaluation de l&#39;effet des inégalités sociales sur l&#39;utilisation des services sur une base régionale. Cette version régionale de l&#39;indice national reprend les deux mêmes formes de la défavorisation, soit matérielle et sociale, mais exprime cette fois les écarts observés à l&#39;échelle de chaque région sociosanitaire et non plus à l&#39;échelle de l&#39;ensemble du Québec.</Abstract>
        <KeywordList>
            <Keyword>Defavorisation</Keyword>
        </KeywordList>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=regional_2011_combine_reg2"/>
        </MetadataURL>
<!-- WARNING: Some mandatory elements for 'DataURL' are missing in this context. -->
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="373" height="167">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=regional_2011_combine_reg2&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>regional_2011_materielle</Name>
        <Title>Défavorisation matérielle 2011 - Régional</Title>
        <Abstract>L&#39;indice de défavorisation défini à l’échelle du Québec a été adapté pour permettre son utilisation dans l&#39;évaluation de l&#39;effet des inégalités sociales sur l&#39;utilisation des services sur une base régionale. Cette version régionale de l&#39;indice national reprend les deux mêmes formes de la défavorisation, soit matérielle et sociale, mais exprime cette fois les écarts observés à l&#39;échelle de chaque région sociosanitaire et non plus à l&#39;échelle de l&#39;ensemble du Québec.</Abstract>
        <KeywordList>
            <Keyword>Défavorisation</Keyword>
        </KeywordList>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=regional_2011_materielle"/>
        </MetadataURL>
<!-- WARNING: Some mandatory elements for 'DataURL' are missing in this context. -->
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="183" height="167">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=regional_2011_materielle&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>regional_2011_sociale</Name>
        <Title>Défavorisation sociale 2011 - Régional</Title>
        <Abstract>L&#39;indice de défavorisation défini à l’échelle du Québec a été adapté pour permettre son utilisation dans l&#39;évaluation de l&#39;effet des inégalités sociales sur l&#39;utilisation des services sur une base régionale. Cette version régionale de l&#39;indice national reprend les deux mêmes formes de la défavorisation, soit matérielle et sociale, mais exprime cette fois les écarts observés à l&#39;échelle de chaque région sociosanitaire et non plus à l&#39;échelle de l&#39;ensemble du Québec.</Abstract>
        <KeywordList>
            <Keyword>Défavorisation</Keyword>
        </KeywordList>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=regional_2011_sociale"/>
        </MetadataURL>
<!-- WARNING: Some mandatory elements for 'DataURL' are missing in this context. -->
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="183" height="167">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=regional_2011_sociale&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
    </Layer>
    <Layer queryable="1">
      <Name>inddef_nat_2016</Name>
      <Title>Population/Indice de défavorisation 2016 national</Title>
      <Abstract>inddef_nat_2016</Abstract>
    <Style>
       <Name>default</Name>
       <Title>default</Title>
       <LegendURL width="373" height="653">
          <Format>image/png</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=inddef_nat_2016&amp;format=image/png&amp;STYLE=default"/>
       </LegendURL>
    </Style>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>national_2016_combine</Name>
        <Title>Défavorisation combinée 2016 - National (Reg. 1)</Title>
        <Abstract>L&#39;indice de défavorisation défini à l’échelle du Québec a été adapté pour permettre son utilisation dans l&#39;évaluation de l&#39;effet des inégalités sociales sur l&#39;utilisation des services sur une base régionale.</Abstract>
        <KeywordList>
            <Keyword>Défavorisation</Keyword>
        </KeywordList>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=national_2016_combine"/>
        </MetadataURL>
<!-- WARNING: Some mandatory elements for 'DataURL' are missing in this context. -->
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="312" height="167">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=national_2016_combine&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>national_2016_combine_reg2</Name>
        <Title>Défavorisation combinée 2016 - National (Reg. 2)</Title>
        <Abstract>L&#39;indice de défavorisation défini à l’échelle du Québec a été adapté pour permettre son utilisation dans l&#39;évaluation de l&#39;effet des inégalités sociales sur l&#39;utilisation des services sur une base régionale.</Abstract>
        <KeywordList>
            <Keyword>Défavorisation</Keyword>
        </KeywordList>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=national_2016_combine_reg2"/>
        </MetadataURL>
<!-- WARNING: Some mandatory elements for 'DataURL' are missing in this context. -->
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="373" height="167">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=national_2016_combine_reg2&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>national_2016_materielle</Name>
        <Title>Défavorisation matérielle 2016 - National</Title>
        <Abstract>L&#39;indice de défavorisation défini à l’échelle du Québec a été adapté pour permettre son utilisation dans l&#39;évaluation de l&#39;effet des inégalités sociales sur l&#39;utilisation des services sur une base nationale.</Abstract>
        <KeywordList>
            <Keyword>Défavorisation</Keyword>
        </KeywordList>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=national_2016_materielle"/>
        </MetadataURL>
<!-- WARNING: Some mandatory elements for 'DataURL' are missing in this context. -->
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="183" height="167">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=national_2016_materielle&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>national_2016_sociale</Name>
        <Title>Défavorisation sociale 2016 - National</Title>
        <Abstract>L&#39;indice de défavorisation défini à l’échelle du Québec a été adapté pour permettre son utilisation dans l&#39;évaluation de l&#39;effet des inégalités sociales sur l&#39;utilisation des services sur une base régionale.</Abstract>
        <KeywordList>
            <Keyword>Défavorisation</Keyword>
        </KeywordList>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=national_2016_sociale"/>
        </MetadataURL>
<!-- WARNING: Some mandatory elements for 'DataURL' are missing in this context. -->
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="183" height="167">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=national_2016_sociale&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
    </Layer>
    <Layer queryable="1">
      <Name>inddef_reg_2016</Name>
      <Title>Population/Indice de défavorisation 2016 régional</Title>
      <Abstract>inddef_reg_2016</Abstract>
    <Style>
       <Name>default</Name>
       <Title>default</Title>
       <LegendURL width="373" height="653">
          <Format>image/png</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=inddef_reg_2016&amp;format=image/png&amp;STYLE=default"/>
       </LegendURL>
    </Style>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>regional_2016_combine</Name>
        <Title>Défavorisation combinée 2016 - Régional (Reg. 1)</Title>
        <Abstract>L&#39;indice de défavorisation défini à l’échelle du Québec a été adapté pour permettre son utilisation dans l&#39;évaluation de l&#39;effet des inégalités sociales sur l&#39;utilisation des services sur une base régionale. Cette version régionale de l&#39;indice national reprend les deux mêmes formes de la défavorisation, soit matérielle et sociale, mais exprime cette fois les écarts observés à l&#39;échelle de chaque région sociosanitaire et non plus à l&#39;échelle de l&#39;ensemble du Québec.</Abstract>
        <KeywordList>
            <Keyword>Défavorisation</Keyword>
        </KeywordList>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=regional_2016_combine"/>
        </MetadataURL>
<!-- WARNING: Some mandatory elements for 'DataURL' are missing in this context. -->
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="312" height="167">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=regional_2016_combine&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>regional_2016_combine_reg2</Name>
        <Title>Défavorisation combinée 2016 - Régional (Reg. 2)</Title>
        <Abstract>L&#39;indice de défavorisation défini à l’échelle du Québec a été adapté pour permettre son utilisation dans l&#39;évaluation de l&#39;effet des inégalités sociales sur l&#39;utilisation des services sur une base régionale. Cette version régionale de l&#39;indice national reprend les deux mêmes formes de la défavorisation, soit matérielle et sociale, mais exprime cette fois les écarts observés à l&#39;échelle de chaque région sociosanitaire et non plus à l&#39;échelle de l&#39;ensemble du Québec.</Abstract>
        <KeywordList>
            <Keyword>Défavorisation</Keyword>
        </KeywordList>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=regional_2016_combine_reg2"/>
        </MetadataURL>
<!-- WARNING: Some mandatory elements for 'DataURL' are missing in this context. -->
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="373" height="167">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=regional_2016_combine_reg2&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>regional_2016_materielle</Name>
        <Title>Défavorisation matérielle 2016 - Régional</Title>
        <Abstract>L&#39;indice de défavorisation défini à l’échelle du Québec a été adapté pour permettre son utilisation dans l&#39;évaluation de l&#39;effet des inégalités sociales sur l&#39;utilisation des services sur une base régionale. Cette version régionale de l&#39;indice national reprend les deux mêmes formes de la défavorisation, soit matérielle et sociale, mais exprime cette fois les écarts observés à l&#39;échelle de chaque région sociosanitaire et non plus à l&#39;échelle de l&#39;ensemble du Québec.</Abstract>
        <KeywordList>
            <Keyword>Défavorisation</Keyword>
        </KeywordList>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=regional_2016_materielle"/>
        </MetadataURL>
<!-- WARNING: Some mandatory elements for 'DataURL' are missing in this context. -->
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="183" height="167">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=regional_2016_materielle&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>regional_2016_sociale</Name>
        <Title>Défavorisation sociale 2016 - Régional</Title>
        <Abstract>L&#39;indice de défavorisation défini à l’échelle du Québec a été adapté pour permettre son utilisation dans l&#39;évaluation de l&#39;effet des inégalités sociales sur l&#39;utilisation des services sur une base régionale. Cette version régionale de l&#39;indice national reprend les deux mêmes formes de la défavorisation, soit matérielle et sociale, mais exprime cette fois les écarts observés à l&#39;échelle de chaque région sociosanitaire et non plus à l&#39;échelle de l&#39;ensemble du Québec.</Abstract>
        <KeywordList>
            <Keyword>Défavorisation</Keyword>
        </KeywordList>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=regional_2016_sociale"/>
        </MetadataURL>
<!-- WARNING: Some mandatory elements for 'DataURL' are missing in this context. -->
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="183" height="167">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=regional_2016_sociale&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
    </Layer>
    <Layer queryable="1">
      <Name>CPTAQ</Name>
      <Title>Agriculture</Title>
      <Abstract>CPTAQ</Abstract>
    <Style>
       <Name>default</Name>
       <Title>default</Title>
       <LegendURL width="37" height="5">
          <Format>image/png</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=CPTAQ&amp;format=image/png&amp;STYLE=default"/>
       </LegendURL>
    </Style>
      <Layer queryable="1" opaque="0" cascaded="1">
<!-- WARNING: The layer name 'Zones agricoles (CPTAQ)' might contain spaces or invalid characters or may start with a number. This could lead to potential problems. -->
        <Name>Zones agricoles (CPTAQ)</Name>
        <Title>Zonage agricole (CPTAQ)</Title>
        <KeywordList>
            <Keyword>zonage</Keyword>
            <Keyword>agricolae</Keyword>
            <Keyword>cptaq</Keyword>
            <Keyword>agriculture</Keyword>
        </KeywordList>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=Zones agricoles (CPTAQ)"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/4836cdba-f26b-4803-a068-01de937ae557"/>
        </DataURL>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="1">
        <Name>incl_excl</Name>
        <Title>Inclusion et exclusion (CPTAQ)</Title>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=incl_excl"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/69a93783-00a4-4b6b-b57e-c23567f8d9d6"/>
        </DataURL>
        <MinScaleDenominator>1</MinScaleDenominator>
        <MaxScaleDenominator>110000</MaxScaleDenominator>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="1">
        <Name>decision</Name>
        <Title>Polygone de décision (CPTAQ)</Title>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=decision"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/02bdd89e-fe1e-49b0-abb5-011cbf24ac27"/>
        </DataURL>
        <MinScaleDenominator>1</MinScaleDenominator>
        <MaxScaleDenominator>60000</MaxScaleDenominator>
      </Layer>
    </Layer>
    <Layer queryable="1">
      <Name>VEGETATION</Name>
      <Title>Végétation</Title>
      <Abstract>VEGETATION</Abstract>
    <Style>
       <Name>default</Name>
       <Title>default</Title>
       <LegendURL width="157" height="32">
          <Format>image/png</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=VEGETATION&amp;format=image/png&amp;STYLE=default"/>
       </LegendURL>
    </Style>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>VILLE_DE_QUEBEC_CANOPE_S</Name>
        <Title>Canopée de la ville de Québec</Title>
        <Abstract>Canopée</Abstract>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-1.1e+06</westBoundLongitude>
            <eastBoundLongitude>1.1e+06</eastBoundLongitude>
            <southBoundLatitude>-23500</southBoundLatitude>
            <northBoundLatitude>2.2535e+06</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="0" miny="0" maxx="0" maxy="0" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=VILLE_DE_QUEBEC_CANOPE_S"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/"/>
        </DataURL>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="157" height="32">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=VILLE_DE_QUEBEC_CANOPE_S&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
        <MinScaleDenominator>1</MinScaleDenominator>
        <MaxScaleDenominator>50000</MaxScaleDenominator>
      </Layer>
    </Layer>
    <Layer queryable="1">
<!-- WARNING: The layer name 'Sécurité civile/Aléas naturels/Incendie de forêt' might contain spaces or invalid characters or may start with a number. This could lead to potential problems. -->
      <Name>Sécurité civile/Aléas naturels/Incendie de forêt</Name>
      <Title>Sécurité civile/Aléas naturels/Incendie de forêt</Title>
      <Abstract>Sécurité civile/Aléas naturels/Incendie de forêt</Abstract>
    <Style>
       <Name>default</Name>
       <Title>default</Title>
       <LegendURL width="137" height="356">
          <Format>image/png</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=Sécurité civile/Aléas naturels/Incendie de forêt&amp;format=image/png&amp;STYLE=default"/>
       </LegendURL>
    </Style>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>points_feux</Name>
        <Title>Feux (Source : SOPFEU)</Title>
        <Abstract>Points des sources de feux (Source : SOPFEU)</Abstract>
        <KeywordList>
            <Keyword>feux SOPFEU</Keyword>
        </KeywordList>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="">
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://www.sopfeu.qc.ca/imports/_uploaded/file/2008/2008_BC_Feuillet_Contenu_Maitrise.pdf"/>
        </MetadataURL>
        <Style>
          <Name>recense</Name>
          <Title>recense</Title>
          <LegendURL width="137" height="329">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=points_feux&amp;format=image/png&amp;STYLE=recense"/>
          </LegendURL>
        </Style>
        <Style>
          <Name>nouveau</Name>
          <Title>nouveau</Title>
          <LegendURL width="137" height="329">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=points_feux&amp;format=image/png&amp;STYLE=nouveau"/>
          </LegendURL>
        </Style>
        <Style>
          <Name>sousobs</Name>
          <Title>sousobs</Title>
          <LegendURL width="137" height="329">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=points_feux&amp;format=image/png&amp;STYLE=sousobs"/>
          </LegendURL>
        </Style>
        <Style>
          <Name>hors</Name>
          <Title>hors</Title>
          <LegendURL width="137" height="329">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=points_feux&amp;format=image/png&amp;STYLE=hors"/>
          </LegendURL>
        </Style>
        <Style>
          <Name>contenu</Name>
          <Title>contenu</Title>
          <LegendURL width="137" height="329">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=points_feux&amp;format=image/png&amp;STYLE=contenu"/>
          </LegendURL>
        </Style>
        <Style>
          <Name>maitrise</Name>
          <Title>maitrise</Title>
          <LegendURL width="137" height="329">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=points_feux&amp;format=image/png&amp;STYLE=maitrise"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>contours_feux_01</Name>
        <Title>Contours de feux (Source : SOPFEU)</Title>
        <Abstract>Limites des contour de feux (Source : SOPFEU)</Abstract>
        <KeywordList>
            <Keyword>feux SOPFEU</Keyword>
        </KeywordList>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-78.7176</westBoundLongitude>
            <eastBoundLongitude>-63.4833</eastBoundLongitude>
            <southBoundLatitude>50.1369</southBoundLatitude>
            <northBoundLatitude>54.1731</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:42105"
                    minx="-666906" miny="725090" maxx="325745" maxy="1.12708e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=contours_feux_01"/>
        </MetadataURL>
<!-- WARNING: Some mandatory elements for 'DataURL' are missing in this context. -->
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="87" height="32">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=contours_feux_01&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
    </Layer>
    <Layer queryable="1">
<!-- WARNING: The layer name 'Aléas naturels/Inondation/Base de données des zones inondables (BDZI)/Dernière version' might contain spaces or invalid characters or may start with a number. This could lead to potential problems. -->
      <Name>Aléas naturels/Inondation/Base de données des zones inondables (BDZI)/Dernière version</Name>
      <Title>Aléas naturels/Inondation/Base de données des zones inondables (BDZI)/Dernière version</Title>
      <Abstract>Aléas naturels/Inondation/Base de données des zones inondables (BDZI)/Dernière version</Abstract>
    <Style>
       <Name>default</Name>
       <Title>default</Title>
       <LegendURL width="235" height="248">
          <Format>image/png</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=Aléas naturels/Inondation/Base de données des zones inondables (BDZI)/Dernière version&amp;format=image/png&amp;STYLE=default"/>
       </LegendURL>
    </Style>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>BDZI_ZOI_S_0_100</Name>
        <Title>Zones de crue 0-100 ans</Title>
        <KeywordList>
            <Keyword>bdzi</Keyword>
            <Keyword>base</Keyword>
            <Keyword>données</Keyword>
            <Keyword>zones</Keyword>
            <Keyword>inondables</Keyword>
        </KeywordList>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=BDZI_ZOI_S_0_100"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/base-de-donnees-des-zones-inondables"/>
        </DataURL>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="175" height="32">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=BDZI_ZOI_S_0_100&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
        <MaxScaleDenominator>100000</MaxScaleDenominator>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>BDZI_ZOI_S_AUTRE</Name>
        <Title>Autres zones inondables</Title>
        <KeywordList>
            <Keyword>bdzi</Keyword>
            <Keyword>base</Keyword>
            <Keyword>données</Keyword>
            <Keyword>zones</Keyword>
            <Keyword>inondables</Keyword>
        </KeywordList>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=BDZI_ZOI_S_AUTRE"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/base-de-donnees-des-zones-inondables"/>
        </DataURL>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="160" height="32">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=BDZI_ZOI_S_AUTRE&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
        <MaxScaleDenominator>100000</MaxScaleDenominator>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>BDZI_ZOI_S_FAIBLE</Name>
        <Title>Zones de faible courant</Title>
        <KeywordList>
            <Keyword>bdzi</Keyword>
            <Keyword>base</Keyword>
            <Keyword>données</Keyword>
            <Keyword>zones</Keyword>
            <Keyword>inondables</Keyword>
        </KeywordList>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=BDZI_ZOI_S_FAIBLE"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/base-de-donnees-des-zones-inondables"/>
        </DataURL>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="166" height="32">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=BDZI_ZOI_S_FAIBLE&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
        <MaxScaleDenominator>250000</MaxScaleDenominator>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>BDZI_ZOI_S_GRAND</Name>
        <Title>Zones de grand courant</Title>
        <KeywordList>
            <Keyword>bdzi</Keyword>
            <Keyword>base</Keyword>
            <Keyword>données</Keyword>
            <Keyword>zones</Keyword>
            <Keyword>inondables</Keyword>
        </KeywordList>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=BDZI_ZOI_S_GRAND"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/base-de-donnees-des-zones-inondables"/>
        </DataURL>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="169" height="32">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=BDZI_ZOI_S_GRAND&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
        <MaxScaleDenominator>250000</MaxScaleDenominator>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>BDZI_ZOI_L</Name>
        <Title>Limites des plaines inondables</Title>
        <KeywordList>
            <Keyword>bdzi</Keyword>
            <Keyword>base</Keyword>
            <Keyword>données</Keyword>
            <Keyword>zones</Keyword>
            <Keyword>inondables</Keyword>
        </KeywordList>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=BDZI_ZOI_L"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/base-de-donnees-des-zones-inondables"/>
        </DataURL>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="168" height="32">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=BDZI_ZOI_L&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
        <MaxScaleDenominator>250000</MaxScaleDenominator>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>BDZI_HIST_L</Name>
        <Title>Historique</Title>
        <KeywordList>
            <Keyword>bdzi</Keyword>
            <Keyword>base</Keyword>
            <Keyword>données</Keyword>
            <Keyword>zones</Keyword>
            <Keyword>inondables</Keyword>
        </KeywordList>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=BDZI_HIST_L"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/base-de-donnees-des-zones-inondables"/>
        </DataURL>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="210" height="32">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=BDZI_HIST_L&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>BDZI_ETUDES_ZI_L</Name>
        <Title>Zones d&#39;études</Title>
        <KeywordList>
            <Keyword>bdzi</Keyword>
            <Keyword>base</Keyword>
            <Keyword>données</Keyword>
            <Keyword>zones</Keyword>
            <Keyword>inondables</Keyword>
        </KeywordList>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=BDZI_ETUDES_ZI_L"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/base-de-donnees-des-zones-inondables"/>
        </DataURL>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="178" height="32">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=BDZI_ETUDES_ZI_L&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
        <MaxScaleDenominator>1e+06</MaxScaleDenominator>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>BDZI_CARTO_ZI_S</Name>
        <Title>Cartographie de zones inondables</Title>
        <KeywordList>
            <Keyword>bdzi</Keyword>
            <Keyword>base</Keyword>
            <Keyword>données</Keyword>
            <Keyword>zones</Keyword>
            <Keyword>inondables</Keyword>
        </KeywordList>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=BDZI_CARTO_ZI_S"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/base-de-donnees-des-zones-inondables"/>
        </DataURL>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="235" height="32">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=BDZI_CARTO_ZI_S&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
        <MaxScaleDenominator>1e+06</MaxScaleDenominator>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>BDZI_CO_CRUE</Name>
        <Title>Cotes de crue</Title>
        <KeywordList>
            <Keyword>Cote</Keyword>
            <Keyword>crue</Keyword>
            <Keyword>bdzi</Keyword>
            <Keyword>base</Keyword>
            <Keyword>données</Keyword>
            <Keyword>zones</Keyword>
            <Keyword>inondables</Keyword>
        </KeywordList>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=BDZI_CO_CRUE"/>
        </MetadataURL>
        <DataURL>
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/base-de-donnees-des-zones-inondables"/>
        </DataURL>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="111" height="32">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=BDZI_CO_CRUE&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
        <MaxScaleDenominator>300000</MaxScaleDenominator>
      </Layer>
    </Layer>
    <Layer queryable="1">
<!-- WARNING: The layer name 'Vigilance/Incendie de foret' might contain spaces or invalid characters or may start with a number. This could lead to potential problems. -->
      <Name>Vigilance/Incendie de foret</Name>
      <Title>Vigilance/Incendie de forêt</Title>
      <Abstract>Vigilance/Incendie de foret</Abstract>
    <Style>
       <Name>default</Name>
       <Title>default</Title>
       <LegendURL width="137" height="707">
          <Format>image/png</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=Vigilance/Incendie de foret&amp;format=image/png&amp;STYLE=default"/>
       </LegendURL>
    </Style>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>GOLOC_points_feux</Name>
        <Title>Feux (Source : SOPFEU)</Title>
        <Abstract>Points des sources de feux (Source : SOPFEU)</Abstract>
        <KeywordList>
            <Keyword>feux SOPFEU</Keyword>
        </KeywordList>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="">
          <Format>text/html</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="http://www.sopfeu.qc.ca/imports/_uploaded/file/2008/2008_BC_Feuillet_Contenu_Maitrise.pdf"/>
        </MetadataURL>
        <Style>
          <Name>recense</Name>
          <Title>recense</Title>
          <LegendURL width="137" height="167">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=GOLOC_points_feux&amp;format=image/png&amp;STYLE=recense"/>
          </LegendURL>
        </Style>
        <Style>
          <Name>nouveau</Name>
          <Title>nouveau</Title>
          <LegendURL width="137" height="167">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=GOLOC_points_feux&amp;format=image/png&amp;STYLE=nouveau"/>
          </LegendURL>
        </Style>
        <Style>
          <Name>sousobs</Name>
          <Title>sousobs</Title>
          <LegendURL width="137" height="167">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=GOLOC_points_feux&amp;format=image/png&amp;STYLE=sousobs"/>
          </LegendURL>
        </Style>
        <Style>
          <Name>hors</Name>
          <Title>hors</Title>
          <LegendURL width="137" height="167">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=GOLOC_points_feux&amp;format=image/png&amp;STYLE=hors"/>
          </LegendURL>
        </Style>
        <Style>
          <Name>contenu</Name>
          <Title>contenu</Title>
          <LegendURL width="137" height="167">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=GOLOC_points_feux&amp;format=image/png&amp;STYLE=contenu"/>
          </LegendURL>
        </Style>
        <Style>
          <Name>maitrise</Name>
          <Title>maitrise</Title>
          <LegendURL width="137" height="167">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=GOLOC_points_feux&amp;format=image/png&amp;STYLE=maitrise"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>contours_feux_02</Name>
        <Title>Contours de feux (Source : SOPFEU)</Title>
        <Abstract>Limites des contour de feux (Source : SOPFEU)</Abstract>
        <KeywordList>
            <Keyword>feux SOPFEU</Keyword>
        </KeywordList>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-78.7176</westBoundLongitude>
            <eastBoundLongitude>-63.4833</eastBoundLongitude>
            <southBoundLatitude>50.1369</southBoundLatitude>
            <northBoundLatitude>54.1731</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:42105"
                    minx="-666906" miny="725090" maxx="325745" maxy="1.12708e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=contours_feux_02"/>
        </MetadataURL>
<!-- WARNING: Some mandatory elements for 'DataURL' are missing in this context. -->
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="87" height="32">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=contours_feux_02&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>danger_incendie_apres_demain</Name>
        <Title>Danger d&#39;incendie prévu après demain (Source : SOPFEU)</Title>
        <Abstract>Danger d&#39;incendie (Source : SOPFEU)</Abstract>
        <KeywordList>
            <Keyword>feux SOPFEU danger incendie</Keyword>
        </KeywordList>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=danger_incendie_apres_demain"/>
        </MetadataURL>
<!-- WARNING: Some mandatory elements for 'DataURL' are missing in this context. -->
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="123" height="167">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=danger_incendie_apres_demain&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>danger_incendie_demain</Name>
        <Title>Danger d&#39;incendie prévu demain (Source : SOPFEU)</Title>
        <Abstract>Danger d&#39;incendie (Source : SOPFEU)</Abstract>
        <KeywordList>
            <Keyword>feux SOPFEU danger incendie</Keyword>
        </KeywordList>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=danger_incendie_demain"/>
        </MetadataURL>
<!-- WARNING: Some mandatory elements for 'DataURL' are missing in this context. -->
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="123" height="167">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=danger_incendie_demain&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>danger_incendie</Name>
        <Title>Dangers d&#39;incendie (Source : SOPFEU)</Title>
        <Abstract>Danger d&#39;incendie (Source : SOPFEU)</Abstract>
        <KeywordList>
            <Keyword>feux SOPFEU danger incendie</Keyword>
        </KeywordList>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=danger_incendie"/>
        </MetadataURL>
<!-- WARNING: Some mandatory elements for 'DataURL' are missing in this context. -->
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="123" height="167">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=danger_incendie&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>limite_feu_ciel_ouvert</Name>
        <Title>Interdictions de feux à ciel ouvert (Source : SOPFEU)</Title>
        <Abstract>Limites de l&#39;interdiction de feux à ciel ouvert (Source : SOPFEU)</Abstract>
        <KeywordList>
            <Keyword>feux interdiction mesure préventive SOPFEU</Keyword>
        </KeywordList>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:42105"
                    minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=limite_feu_ciel_ouvert"/>
        </MetadataURL>
<!-- WARNING: Some mandatory elements for 'DataURL' are missing in this context. -->
      </Layer>
      <Layer queryable="1" opaque="0" cascaded="0">
        <Name>feux2023_zones_interdit_circuler</Name>
        <Title>Secteurs visés par l&#39;interdiction d&#39;accès en forêt (IAFC)</Title>
        <Abstract>Secteurs visés par l&#39;interdiction d&#39;accès en forêt sur les terres du domaine de l&#39;État et une fermeture de chemins pour des considérations d&#39;intérêt public</Abstract>
        <KeywordList>
            <Keyword>feux</Keyword>
            <Keyword>foret</Keyword>
            <Keyword>2023</Keyword>
        </KeywordList>
        <CRS>EPSG:32198</CRS>
        <CRS>EPSG:2036</CRS>
        <CRS>EPSG:2037</CRS>
        <CRS>EPSG:2148</CRS>
        <CRS>EPSG:2149</CRS>
        <CRS>EPSG:2150</CRS>
        <CRS>EPSG:3797</CRS>
        <CRS>EPSG:3857</CRS>
        <CRS>EPSG:4269</CRS>
        <CRS>EPSG:4326</CRS>
        <CRS>EPSG:26917</CRS>
        <CRS>EPSG:26918</CRS>
        <CRS>EPSG:26919</CRS>
        <CRS>EPSG:26920</CRS>
        <CRS>EPSG:32183</CRS>
        <CRS>EPSG:32184</CRS>
        <CRS>EPSG:32185</CRS>
        <CRS>EPSG:32186</CRS>
        <CRS>EPSG:32187</CRS>
        <CRS>EPSG:32188</CRS>
        <CRS>EPSG:32189</CRS>
        <CRS>EPSG:32190</CRS>
        <CRS>EPSG:42105</CRS>
        <CRS>EPSG:42304</CRS>
        <CRS>EPSG:900913</CRS>
        <EX_GeographicBoundingBox>
            <westBoundLongitude>-1.1e+06</westBoundLongitude>
            <eastBoundLongitude>1.1e+06</eastBoundLongitude>
            <southBoundLatitude>-23500</southBoundLatitude>
            <northBoundLatitude>2.2535e+06</northBoundLatitude>
        </EX_GeographicBoundingBox>
        <BoundingBox CRS="EPSG:32198"
                    minx="-7.98063e+07" miny="-7.34843e+07" maxx="7.78028e+07" maxy="8.3514e+07" />
        <MetadataURL type="TC211">
          <Format>text/xml</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=feux2023_zones_interdit_circuler"/>
        </MetadataURL>
        <DataURL>
          <Format>igo</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.quebec.ca/nouvelles/actualites/details/incendies-de-foret-interdiction-dacces-en-foret-sur-les-terres-du-domaine-de-letat-et-fermeture-de-chemins"/>
        </DataURL>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="82" height="32">
             <Format>image/png</Format>
             <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=feux2023_zones_interdit_circuler&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
      </Layer>
    </Layer>
  </Layer>
</Capability>
</WMS_Capabilities>
