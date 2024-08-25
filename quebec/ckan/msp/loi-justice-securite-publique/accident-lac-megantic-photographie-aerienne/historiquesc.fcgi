<?xml version="1.0" encoding="UTF-8" standalone="yes"?>
<WMS_Capabilities version="1.3.0" xmlns="http://www.opengis.net/wms" xmlns:sld="http://www.opengis.net/sld" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:ms="http://mapserver.gis.umn.edu/mapserver" xsi:schemaLocation="http://www.opengis.net/wms http://schemas.opengis.net/wms/1.3.0/capabilities_1_3_0.xsd  http://www.opengis.net/sld http://schemas.opengis.net/sld/1.1.0/sld_capabilities.xsd  http://mapserver.gis.umn.edu/mapserver https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?service=WMS&amp;version=1.3.0&amp;request=GetSchemaExtension">
  <Service>
    <Name>WMS</Name>
    <Title>Service web du Ministère de la Sécurité publique du Québec</Title>
    <Abstract>Service web du Ministère de la Sécurité publique du Québec (MSP)</Abstract>
    <KeywordList>
      <Keyword>MSP</Keyword>
    </KeywordList>
    <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?"/>
    <ContactInformation>
      <ContactPersonPrimary>
        <ContactPerson>Équipe géomatique</ContactPerson>
        <ContactOrganization>Ministère de la sécurité publique</ContactOrganization>
      </ContactPersonPrimary>
      <ContactElectronicMailAddress>geomsp@msp.gouv.qc.ca</ContactElectronicMailAddress>
    </ContactInformation>
    <Fees>none</Fees>
    <AccessConstraints>L'utilisation des données de ce service WMS est sujette aux conditions d'utilisation stipulées par l'entente ou l'accord de licence entre le Ministère de la sécurité publique du Québec (MSP) et son propriétaire.  Ce service WMS est diffusé selon les informations fournies par le propriétaire et n'a aucune valeur légale. Le Ministère de la sécurité publique n'est pas responsable des erreurs qui pourraient s'y retrouver.</AccessConstraints>
    <MaxWidth>3200</MaxWidth>
    <MaxHeight>3200</MaxHeight>
  </Service>
  <Capability>
    <Request>
      <GetCapabilities>
        <Format>text/xml</Format>
        <DCPType>
          <HTTP>
            <Get>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?"/>
            </Get>
            <Post>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?"/>
            </Post>
          </HTTP>
        </DCPType>
      </GetCapabilities>
      <GetMap>
        <Format>image/png</Format>
        <Format>image/jpeg</Format>
        <Format>image/png; mode=8bit</Format>
        <Format>image/vnd.jpeg-png</Format>
        <Format>image/vnd.jpeg-png8</Format>
        <Format>application/x-pdf</Format>
        <Format>image/svg+xml</Format>
        <Format>image/tiff</Format>
        <Format>application/vnd.google-earth.kml+xml</Format>
        <Format>application/vnd.google-earth.kmz</Format>
        <Format>application/x-protobuf</Format>
        <Format>application/json</Format>
        <DCPType>
          <HTTP>
            <Get>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?"/>
            </Get>
            <Post>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?"/>
            </Post>
          </HTTP>
        </DCPType>
      </GetMap>
      <GetFeatureInfo>
        <Format>text/html</Format>
        <Format>geojson</Format>
        <Format>application/vnd.ogc.gml</Format>
        <Format>text/plain</Format>
        <DCPType>
          <HTTP>
            <Get>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?"/>
            </Get>
            <Post>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?"/>
            </Post>
          </HTTP>
        </DCPType>
      </GetFeatureInfo>
      <sld:DescribeLayer>
        <Format>text/xml</Format>
        <DCPType>
          <HTTP>
            <Get>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?"/>
            </Get>
            <Post>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?"/>
            </Post>
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
            <Get>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?"/>
            </Get>
            <Post>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?"/>
            </Post>
          </HTTP>
        </DCPType>
      </sld:GetLegendGraphic>
      <ms:GetStyles>
        <Format>text/xml</Format>
        <DCPType>
          <HTTP>
            <Get>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?"/>
            </Get>
            <Post>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?"/>
            </Post>
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
      <Name>MSP</Name>
      <Title>historiquesc</Title>
      <Abstract>Service web du Ministère de la Sécurité publique du Québec (MSP)</Abstract>
      <KeywordList>
        <Keyword>MSP</Keyword>
      </KeywordList>
      <CRS>EPSG:2037</CRS>
      <CRS>EPSG:2148</CRS>
      <CRS>EPSG:2149</CRS>
      <CRS>EPSG:2150</CRS>
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
      <CRS>EPSG:42304</CRS>
      <CRS>EPSG:900913</CRS>
      <EX_GeographicBoundingBox>
        <westBoundLongitude>-90.2178</westBoundLongitude>
        <eastBoundLongitude>-46.7822</eastBoundLongitude>
        <southBoundLatitude>42.8632</southBoundLatitude>
        <northBoundLatitude>64.2855</northBoundLatitude>
      </EX_GeographicBoundingBox>
      <BoundingBox CRS="EPSG:32198" minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06"/>
      <Attribution>
        <Title>© Gouvernement du Québec</Title>
        <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="http://www.droitauteur.gouv.qc.ca/copyright.php"/>
        <LogoURL width="64" height="14">
          <Format>image/png</Format>
          <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/gouvouvert/public/images/quebec/gouv_qc_logo.png"/>
        </LogoURL>
      </Attribution>
      <Layer queryable="1">
        <Name>RISC</Name>
        <Title>Registre des interventions en sécurité civile (RISC)</Title>
        <Abstract>RISC</Abstract>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="251" height="2543">
            <Format>image/png</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=RISC&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
        <Layer queryable="1" opaque="0" cascaded="0">
          <Name>msp_risc_evenements_public_24h</Name>
          <Title>Événements de sécurité civile des dernières 24h</Title>
          <Abstract>Événements de sécurité civile signalés les dernières 24h par le Ministère de la Sécurité Publique du Québec. Un événement correspond à la manifestation d'un aléa sur le territoire d'une municipalité locale ou d'un territoire non-organisé (TNO).</Abstract>
          <KeywordList>
            <Keyword>événement</Keyword>
            <Keyword>RISC</Keyword>
            <Keyword>sécurité</Keyword>
            <Keyword>civile</Keyword>
            <Keyword>MSP</Keyword>
            <Keyword>inondation</Keyword>
            <Keyword>érosion</Keyword>
            <Keyword>glissement</Keyword>
            <Keyword>mouvement</Keyword>
            <Keyword>terrain</Keyword>
            <Keyword>accident</Keyword>
            <Keyword>incident</Keyword>
            <Keyword>feu</Keyword>
            <Keyword>avalanche</Keyword>
            <Keyword>écrasement</Keyword>
            <Keyword>incendie</Keyword>
            <Keyword>déversement</Keyword>
            <Keyword>orage</Keyword>
            <Keyword>tempête</Keyword>
            <Keyword>panne</Keyword>
            <Keyword>tornade</Keyword>
            <Keyword>tremblement</Keyword>
            <Keyword>ouragan</Keyword>
            <Keyword>vent</Keyword>
            <Keyword>aléa</Keyword>
            <Keyword>sévérité</Keyword>
          </KeywordList>
          <CRS>EPSG:32198</CRS>
          <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:32198" minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06"/>
          <Dimension name="time" units="ISO8601" nearestValue="0">2020-01-01T05:00:00Z/2030-12-31T05:00:00Z</Dimension>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=msp_risc_evenements_public_24h"/>
          </MetadataURL>
          <DataURL>
            <Format>text/html</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/evenements-de-securite-civile"/>
          </DataURL>
          <Style>
            <Name>default</Name>
            <Title>default</Title>
            <LegendURL width="251" height="599">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=msp_risc_evenements_public_24h&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
        </Layer>
        <Layer queryable="1" opaque="0" cascaded="0">
          <Name>msp_risc_evenements_public</Name>
          <Title>Événements de sécurité civile</Title>
          <Abstract>Événements de sécurité civile signalés par le Ministère de la Sécurité Publique du Québec. Un événement correspond à la manifestation d'un aléa sur le territoire d'une municipalité locale ou d'un territoire non-organisé (TNO).</Abstract>
          <KeywordList>
            <Keyword>événement</Keyword>
            <Keyword>MSP</Keyword>
            <Keyword>inondation</Keyword>
            <Keyword>érosion</Keyword>
            <Keyword>glissement</Keyword>
            <Keyword>mouvement</Keyword>
            <Keyword>terrain</Keyword>
            <Keyword>accident</Keyword>
            <Keyword>incident</Keyword>
            <Keyword>feu</Keyword>
            <Keyword>avalanche</Keyword>
            <Keyword>écrasement</Keyword>
            <Keyword>incendie</Keyword>
            <Keyword>déversement</Keyword>
            <Keyword>orage</Keyword>
            <Keyword>tempête</Keyword>
            <Keyword>panne</Keyword>
            <Keyword>tornade</Keyword>
            <Keyword>tremblement</Keyword>
            <Keyword>ouragan</Keyword>
            <Keyword>vent</Keyword>
            <Keyword>aléa</Keyword>
            <Keyword>sévérité</Keyword>
          </KeywordList>
          <CRS>EPSG:32198</CRS>
          <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:32198" minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06"/>
          <Dimension name="time" units="ISO8601" nearestValue="0">2020-01-01T05:00:00Z/2030-12-31T05:00:00Z</Dimension>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=msp_risc_evenements_public"/>
          </MetadataURL>
          <DataURL>
            <Format>text/html</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/evenements-de-securite-civile"/>
          </DataURL>
          <Style>
            <Name>default</Name>
            <Title>default</Title>
            <LegendURL width="251" height="599">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=msp_risc_evenements_public&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
        </Layer>
      </Layer>
      <Layer queryable="1">
        <Name>Inondations_2019</Name>
        <Title>Inondations 2019</Title>
        <Abstract>Inondations_2019</Abstract>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="328" height="4433">
            <Format>image/png</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=Inondations_2019&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
        <Layer queryable="1" opaque="0" cascaded="0">
          <Name>Inon2019_EauLibre_20190510_grandmontreal_radarsat2</Name>
          <Title>2019/05/10 - Eau libre - Grand Montréal - Radarsat 2</Title>
          <KeywordList>
            <Keyword>eau</Keyword>
            <Keyword>libre</Keyword>
            <Keyword>Grand</Keyword>
            <Keyword>Montréal</Keyword>
            <Keyword>inondations</Keyword>
            <Keyword>10</Keyword>
            <Keyword>mai</Keyword>
            <Keyword>2019</Keyword>
            <Keyword>radarsat</Keyword>
            <Keyword>2</Keyword>
          </KeywordList>
          <CRS>EPSG:3857</CRS>
          <CRS>EPSG:2036</CRS>
          <CRS>EPSG:2037</CRS>
          <CRS>EPSG:2148</CRS>
          <CRS>EPSG:2149</CRS>
          <CRS>EPSG:2150</CRS>
          <CRS>EPSG:3797</CRS>
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
            <westBoundLongitude>-81.7467</westBoundLongitude>
            <eastBoundLongitude>-53.8989</eastBoundLongitude>
            <southBoundLatitude>44.2229</southBoundLatitude>
            <northBoundLatitude>55.7054</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:3857" minx="-9.1e+06" miny="5.5e+06" maxx="-6e+06" maxy="7.5e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=Inon2019_EauLibre_20190510_grandmontreal_radarsat2"/>
          </MetadataURL>
          <DataURL>
            <Format>text/html</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/cartographie-des-inondations-printemps-2019/resource/53ecf495-9320-47b4-9c9f-7edb9cbba0c5"/>
          </DataURL>
          <Style>
            <Name>RnCan</Name>
            <Title>RnCan</Title>
            <LegendURL width="193" height="113">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=Inon2019_EauLibre_20190510_grandmontreal_radarsat2&amp;format=image/png&amp;STYLE=RnCan"/>
            </LegendURL>
          </Style>
          <MinScaleDenominator>1</MinScaleDenominator>
          <MaxScaleDenominator>1e+07</MaxScaleDenominator>
        </Layer>
        <Layer queryable="1" opaque="0" cascaded="0">
          <Name>msp_inon2019_zone_inondee_chaudiere_dpp</Name>
          <Title>Inondations 2019 - À partir de photos héliportées</Title>
          <KeywordList>
            <Keyword>inondations</Keyword>
            <Keyword>2019</Keyword>
            <Keyword>photos</Keyword>
            <Keyword>héliportées</Keyword>
          </KeywordList>
          <CRS>EPSG:32198</CRS>
          <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:32198" minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=msp_inon2019_zone_inondee_chaudiere_dpp"/>
          </MetadataURL>
          <DataURL>
            <Format>text/html</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/cartographie-des-inondations-printemps-2019/resource/a278a8ea-33b3-43e3-a204-429a0771ddac"/>
          </DataURL>
          <Style>
            <Name>vallee-jonction</Name>
            <Title>vallee-jonction</Title>
            <LegendURL width="117" height="32">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=msp_inon2019_zone_inondee_chaudiere_dpp&amp;format=image/png&amp;STYLE=vallee-jonction"/>
            </LegendURL>
          </Style>
          <Style>
            <Name>ste-marie</Name>
            <Title>ste-marie</Title>
            <LegendURL width="117" height="32">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=msp_inon2019_zone_inondee_chaudiere_dpp&amp;format=image/png&amp;STYLE=ste-marie"/>
            </LegendURL>
          </Style>
          <Style>
            <Name>beauceville</Name>
            <Title>beauceville</Title>
            <LegendURL width="117" height="32">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=msp_inon2019_zone_inondee_chaudiere_dpp&amp;format=image/png&amp;STYLE=beauceville"/>
            </LegendURL>
          </Style>
          <Style>
            <Name>scott</Name>
            <Title>scott</Title>
            <LegendURL width="117" height="32">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=msp_inon2019_zone_inondee_chaudiere_dpp&amp;format=image/png&amp;STYLE=scott"/>
            </LegendURL>
          </Style>
          <MinScaleDenominator>1</MinScaleDenominator>
          <MaxScaleDenominator>1e+07</MaxScaleDenominator>
        </Layer>
        <Layer queryable="1" opaque="0" cascaded="0">
          <Name>Inon2019_EauLibre_20190421_GrandMontreal_TerraSar-X</Name>
          <Title>2019/04/21 - Eau libre - Grand Montréal - TerraSar-X</Title>
          <KeywordList>
            <Keyword>eau</Keyword>
            <Keyword>libre</Keyword>
            <Keyword>Grand</Keyword>
            <Keyword>Montréal</Keyword>
            <Keyword>inondations</Keyword>
            <Keyword>21</Keyword>
            <Keyword>avril</Keyword>
            <Keyword>2019</Keyword>
            <Keyword>TerraSar-X</Keyword>
          </KeywordList>
          <CRS>EPSG:3857</CRS>
          <CRS>EPSG:2036</CRS>
          <CRS>EPSG:2037</CRS>
          <CRS>EPSG:2148</CRS>
          <CRS>EPSG:2149</CRS>
          <CRS>EPSG:2150</CRS>
          <CRS>EPSG:3797</CRS>
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
            <westBoundLongitude>-81.7467</westBoundLongitude>
            <eastBoundLongitude>-53.8989</eastBoundLongitude>
            <southBoundLatitude>44.2229</southBoundLatitude>
            <northBoundLatitude>55.7054</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:3857" minx="-9.1e+06" miny="5.5e+06" maxx="-6e+06" maxy="7.5e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=Inon2019_EauLibre_20190421_GrandMontreal_TerraSar-X"/>
          </MetadataURL>
          <DataURL>
            <Format>text/html</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/cartographie-des-inondations-printemps-2019/resource/53ecf495-9320-47b4-9c9f-7edb9cbba0c5"/>
          </DataURL>
          <Style>
            <Name>RnCan</Name>
            <Title>RnCan</Title>
            <LegendURL width="193" height="113">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=Inon2019_EauLibre_20190421_GrandMontreal_TerraSar-X&amp;format=image/png&amp;STYLE=RnCan"/>
            </LegendURL>
          </Style>
          <MinScaleDenominator>1</MinScaleDenominator>
          <MaxScaleDenominator>1e+07</MaxScaleDenominator>
        </Layer>
        <Layer queryable="1" opaque="0" cascaded="0">
          <Name>Inon2019_EauLibre_20190429_LacDeuxMontagnes_Pleiade</Name>
          <Title>2019/04/29 - Eau libre - Lac des Deux Montagnes - Pléiade</Title>
          <KeywordList>
            <Keyword>eau</Keyword>
            <Keyword>libre</Keyword>
            <Keyword>lac</Keyword>
            <Keyword>Deux</Keyword>
            <Keyword>Montagnes</Keyword>
            <Keyword>inondations</Keyword>
            <Keyword>29</Keyword>
            <Keyword>avril</Keyword>
            <Keyword>2019</Keyword>
            <Keyword>Pléiade</Keyword>
          </KeywordList>
          <CRS>EPSG:3857</CRS>
          <CRS>EPSG:2036</CRS>
          <CRS>EPSG:2037</CRS>
          <CRS>EPSG:2148</CRS>
          <CRS>EPSG:2149</CRS>
          <CRS>EPSG:2150</CRS>
          <CRS>EPSG:3797</CRS>
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
            <westBoundLongitude>-81.7467</westBoundLongitude>
            <eastBoundLongitude>-53.8989</eastBoundLongitude>
            <southBoundLatitude>44.2229</southBoundLatitude>
            <northBoundLatitude>55.7054</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:3857" minx="-9.1e+06" miny="5.5e+06" maxx="-6e+06" maxy="7.5e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=Inon2019_EauLibre_20190429_LacDeuxMontagnes_Pleiade"/>
          </MetadataURL>
          <DataURL>
            <Format>text/html</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/cartographie-des-inondations-printemps-2019/resource/53ecf495-9320-47b4-9c9f-7edb9cbba0c5"/>
          </DataURL>
          <Style>
            <Name>RnCan</Name>
            <Title>RnCan</Title>
            <LegendURL width="193" height="113">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=Inon2019_EauLibre_20190429_LacDeuxMontagnes_Pleiade&amp;format=image/png&amp;STYLE=RnCan"/>
            </LegendURL>
          </Style>
          <MinScaleDenominator>1</MinScaleDenominator>
          <MaxScaleDenominator>1e+07</MaxScaleDenominator>
        </Layer>
        <Layer queryable="1" opaque="0" cascaded="0">
          <Name>Inon2019_EauLibre_20190504_Outaouais_Radarsat2</Name>
          <Title>2019/05/04 - Eau libre - Outaouais - Radarsat 2</Title>
          <KeywordList>
            <Keyword>eau</Keyword>
            <Keyword>libre</Keyword>
            <Keyword>Outaouais</Keyword>
            <Keyword>inondations</Keyword>
            <Keyword>4</Keyword>
            <Keyword>mai</Keyword>
            <Keyword>2019</Keyword>
            <Keyword>radarsat2</Keyword>
          </KeywordList>
          <CRS>EPSG:3857</CRS>
          <CRS>EPSG:2036</CRS>
          <CRS>EPSG:2037</CRS>
          <CRS>EPSG:2148</CRS>
          <CRS>EPSG:2149</CRS>
          <CRS>EPSG:2150</CRS>
          <CRS>EPSG:3797</CRS>
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
            <westBoundLongitude>-81.7467</westBoundLongitude>
            <eastBoundLongitude>-53.8989</eastBoundLongitude>
            <southBoundLatitude>44.2229</southBoundLatitude>
            <northBoundLatitude>55.7054</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:3857" minx="-9.1e+06" miny="5.5e+06" maxx="-6e+06" maxy="7.5e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=Inon2019_EauLibre_20190504_Outaouais_Radarsat2"/>
          </MetadataURL>
          <DataURL>
            <Format>text/html</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/cartographie-des-inondations-printemps-2019/resource/53ecf495-9320-47b4-9c9f-7edb9cbba0c5"/>
          </DataURL>
          <Style>
            <Name>RnCan</Name>
            <Title>RnCan</Title>
            <LegendURL width="193" height="113">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=Inon2019_EauLibre_20190504_Outaouais_Radarsat2&amp;format=image/png&amp;STYLE=RnCan"/>
            </LegendURL>
          </Style>
          <MinScaleDenominator>1</MinScaleDenominator>
          <MaxScaleDenominator>1e+07</MaxScaleDenominator>
        </Layer>
        <Layer queryable="1" opaque="0" cascaded="0">
          <Name>Inon2019_EauLibre_20190424_LacSaintPierre_Radarsat2</Name>
          <Title>2019/04/24 - Eau libre - Lac Saint-Pierre - Radarsat 2</Title>
          <KeywordList>
            <Keyword>eau</Keyword>
            <Keyword>libre</Keyword>
            <Keyword>lac</Keyword>
            <Keyword>Saint-Pierre</Keyword>
            <Keyword>inondations</Keyword>
            <Keyword>24</Keyword>
            <Keyword>avril</Keyword>
            <Keyword>2019</Keyword>
            <Keyword>Radarsat</Keyword>
            <Keyword>2</Keyword>
          </KeywordList>
          <CRS>EPSG:3857</CRS>
          <CRS>EPSG:2036</CRS>
          <CRS>EPSG:2037</CRS>
          <CRS>EPSG:2148</CRS>
          <CRS>EPSG:2149</CRS>
          <CRS>EPSG:2150</CRS>
          <CRS>EPSG:3797</CRS>
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
            <westBoundLongitude>-81.7467</westBoundLongitude>
            <eastBoundLongitude>-53.8989</eastBoundLongitude>
            <southBoundLatitude>44.2229</southBoundLatitude>
            <northBoundLatitude>55.7054</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:3857" minx="-9.1e+06" miny="5.5e+06" maxx="-6e+06" maxy="7.5e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=Inon2019_EauLibre_20190424_LacSaintPierre_Radarsat2"/>
          </MetadataURL>
          <DataURL>
            <Format>text/html</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/cartographie-des-inondations-printemps-2019/resource/53ecf495-9320-47b4-9c9f-7edb9cbba0c5"/>
          </DataURL>
          <Style>
            <Name>RnCan</Name>
            <Title>RnCan</Title>
            <LegendURL width="193" height="113">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=Inon2019_EauLibre_20190424_LacSaintPierre_Radarsat2&amp;format=image/png&amp;STYLE=RnCan"/>
            </LegendURL>
          </Style>
          <MinScaleDenominator>1</MinScaleDenominator>
          <MaxScaleDenominator>1e+07</MaxScaleDenominator>
        </Layer>
        <Layer queryable="1" opaque="0" cascaded="0">
          <Name>Inon2019_EauLibre_20190420_LacDeuxMontagnes_Radarsat2</Name>
          <Title>2019/04/20 - Eau libre - Lac des Deux Montagnes - Radarsat 2</Title>
          <KeywordList>
            <Keyword>eau</Keyword>
            <Keyword>libre</Keyword>
            <Keyword>lac</Keyword>
            <Keyword>deux-montagnes</Keyword>
            <Keyword>inondations</Keyword>
            <Keyword>4</Keyword>
            <Keyword>avril</Keyword>
            <Keyword>2019</Keyword>
            <Keyword>radarsat2</Keyword>
          </KeywordList>
          <CRS>EPSG:3857</CRS>
          <CRS>EPSG:2036</CRS>
          <CRS>EPSG:2037</CRS>
          <CRS>EPSG:2148</CRS>
          <CRS>EPSG:2149</CRS>
          <CRS>EPSG:2150</CRS>
          <CRS>EPSG:3797</CRS>
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
            <westBoundLongitude>-81.7467</westBoundLongitude>
            <eastBoundLongitude>-53.8989</eastBoundLongitude>
            <southBoundLatitude>44.2229</southBoundLatitude>
            <northBoundLatitude>55.7054</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:3857" minx="-9.1e+06" miny="5.5e+06" maxx="-6e+06" maxy="7.5e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=Inon2019_EauLibre_20190420_LacDeuxMontagnes_Radarsat2"/>
          </MetadataURL>
          <DataURL>
            <Format>text/html</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/cartographie-des-inondations-printemps-2019/resource/53ecf495-9320-47b4-9c9f-7edb9cbba0c5"/>
          </DataURL>
          <Style>
            <Name>RnCan</Name>
            <Title>RnCan</Title>
            <LegendURL width="193" height="113">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=Inon2019_EauLibre_20190420_LacDeuxMontagnes_Radarsat2&amp;format=image/png&amp;STYLE=RnCan"/>
            </LegendURL>
          </Style>
          <MinScaleDenominator>1</MinScaleDenominator>
          <MaxScaleDenominator>1e+07</MaxScaleDenominator>
        </Layer>
        <Layer queryable="1" opaque="0" cascaded="0">
          <Name>Inon2019_EauLibre_20190509_HautPontiac_radarsat2</Name>
          <Title>2019/05/09 - Eau libre - Haut Pontiac - Radarsat 2</Title>
          <KeywordList>
            <Keyword>eau</Keyword>
            <Keyword>libre</Keyword>
            <Keyword>Haut-Pontiac</Keyword>
            <Keyword>inondations</Keyword>
            <Keyword>9</Keyword>
            <Keyword>mai</Keyword>
            <Keyword>2019</Keyword>
            <Keyword>radarsat2</Keyword>
          </KeywordList>
          <CRS>EPSG:3857</CRS>
          <CRS>EPSG:2036</CRS>
          <CRS>EPSG:2037</CRS>
          <CRS>EPSG:2148</CRS>
          <CRS>EPSG:2149</CRS>
          <CRS>EPSG:2150</CRS>
          <CRS>EPSG:3797</CRS>
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
            <westBoundLongitude>-81.7467</westBoundLongitude>
            <eastBoundLongitude>-53.8989</eastBoundLongitude>
            <southBoundLatitude>44.2229</southBoundLatitude>
            <northBoundLatitude>55.7054</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:3857" minx="-9.1e+06" miny="5.5e+06" maxx="-6e+06" maxy="7.5e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=Inon2019_EauLibre_20190509_HautPontiac_radarsat2"/>
          </MetadataURL>
          <DataURL>
            <Format>text/html</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/cartographie-des-inondations-printemps-2019/resource/53ecf495-9320-47b4-9c9f-7edb9cbba0c5"/>
          </DataURL>
          <Style>
            <Name>RnCan</Name>
            <Title>RnCan</Title>
            <LegendURL width="193" height="113">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=Inon2019_EauLibre_20190509_HautPontiac_radarsat2&amp;format=image/png&amp;STYLE=RnCan"/>
            </LegendURL>
          </Style>
          <MinScaleDenominator>1</MinScaleDenominator>
          <MaxScaleDenominator>1e+07</MaxScaleDenominator>
        </Layer>
        <Layer queryable="1" opaque="0" cascaded="0">
          <Name>Inon2019_EauLibre_20190503_LacDeuxMontagnes_Radarsat2</Name>
          <Title>2019/05/03 - Eau libre - Lac des Deux Montagnes - Radarsat 2</Title>
          <KeywordList>
            <Keyword>eau</Keyword>
            <Keyword>libre</Keyword>
            <Keyword>lac</Keyword>
            <Keyword>deux-montagnes</Keyword>
            <Keyword>inondations</Keyword>
            <Keyword>3</Keyword>
            <Keyword>mai</Keyword>
            <Keyword>2019</Keyword>
            <Keyword>radarsat2</Keyword>
          </KeywordList>
          <CRS>EPSG:3857</CRS>
          <CRS>EPSG:2036</CRS>
          <CRS>EPSG:2037</CRS>
          <CRS>EPSG:2148</CRS>
          <CRS>EPSG:2149</CRS>
          <CRS>EPSG:2150</CRS>
          <CRS>EPSG:3797</CRS>
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
            <westBoundLongitude>-81.7467</westBoundLongitude>
            <eastBoundLongitude>-53.8989</eastBoundLongitude>
            <southBoundLatitude>44.2229</southBoundLatitude>
            <northBoundLatitude>55.7054</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:3857" minx="-9.1e+06" miny="5.5e+06" maxx="-6e+06" maxy="7.5e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=Inon2019_EauLibre_20190503_LacDeuxMontagnes_Radarsat2"/>
          </MetadataURL>
          <DataURL>
            <Format>text/html</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/cartographie-des-inondations-printemps-2019/resource/53ecf495-9320-47b4-9c9f-7edb9cbba0c5"/>
          </DataURL>
          <Style>
            <Name>RnCan</Name>
            <Title>RnCan</Title>
            <LegendURL width="193" height="113">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=Inon2019_EauLibre_20190503_LacDeuxMontagnes_Radarsat2&amp;format=image/png&amp;STYLE=RnCan"/>
            </LegendURL>
          </Style>
          <MinScaleDenominator>1</MinScaleDenominator>
          <MaxScaleDenominator>1e+07</MaxScaleDenominator>
        </Layer>
        <Layer queryable="1" opaque="0" cascaded="0">
          <Name>Inon2019_EauLibre_20190502_outaouais_sentinel1</Name>
          <Title>2019/05/02 - Eau libre - Outaouais- Sentinel 1</Title>
          <KeywordList>
            <Keyword>eau</Keyword>
            <Keyword>libre</Keyword>
            <Keyword>Outaouais</Keyword>
            <Keyword>inondations</Keyword>
            <Keyword>2</Keyword>
            <Keyword>mai</Keyword>
            <Keyword>2019</Keyword>
            <Keyword>Sentinel</Keyword>
            <Keyword>1</Keyword>
          </KeywordList>
          <CRS>EPSG:32198</CRS>
          <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:32198" minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=Inon2019_EauLibre_20190502_outaouais_sentinel1"/>
          </MetadataURL>
          <DataURL>
            <Format>text/html</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/cartographie-des-inondations-printemps-2019/resource/53ecf495-9320-47b4-9c9f-7edb9cbba0c5"/>
          </DataURL>
          <Style>
            <Name>RnCan</Name>
            <Title>RnCan</Title>
            <LegendURL width="193" height="86">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=Inon2019_EauLibre_20190502_outaouais_sentinel1&amp;format=image/png&amp;STYLE=RnCan"/>
            </LegendURL>
          </Style>
          <MinScaleDenominator>1</MinScaleDenominator>
          <MaxScaleDenominator>1e+07</MaxScaleDenominator>
        </Layer>
        <Layer queryable="1" opaque="0" cascaded="0">
          <Name>Inon2019_EauLibre_20190429_Gatineau_TerraSAR-X</Name>
          <Title>2019/04/29 - Eau libre - Gatineau - TerraSAR-X</Title>
          <KeywordList>
            <Keyword>eau</Keyword>
            <Keyword>libre</Keyword>
            <Keyword>Gatineau</Keyword>
            <Keyword>inondations</Keyword>
            <Keyword>29</Keyword>
            <Keyword>avril</Keyword>
            <Keyword>2019</Keyword>
            <Keyword>TerraSAR-X</Keyword>
          </KeywordList>
          <CRS>EPSG:3857</CRS>
          <CRS>EPSG:2036</CRS>
          <CRS>EPSG:2037</CRS>
          <CRS>EPSG:2148</CRS>
          <CRS>EPSG:2149</CRS>
          <CRS>EPSG:2150</CRS>
          <CRS>EPSG:3797</CRS>
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
            <westBoundLongitude>-81.7467</westBoundLongitude>
            <eastBoundLongitude>-53.8989</eastBoundLongitude>
            <southBoundLatitude>44.2229</southBoundLatitude>
            <northBoundLatitude>55.7054</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:3857" minx="-9.1e+06" miny="5.5e+06" maxx="-6e+06" maxy="7.5e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=Inon2019_EauLibre_20190429_Gatineau_TerraSAR-X"/>
          </MetadataURL>
          <DataURL>
            <Format>text/html</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/cartographie-des-inondations-printemps-2019/resource/53ecf495-9320-47b4-9c9f-7edb9cbba0c5"/>
          </DataURL>
          <Style>
            <Name>RnCan</Name>
            <Title>RnCan</Title>
            <LegendURL width="193" height="113">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=Inon2019_EauLibre_20190429_Gatineau_TerraSAR-X&amp;format=image/png&amp;STYLE=RnCan"/>
            </LegendURL>
          </Style>
          <MinScaleDenominator>1</MinScaleDenominator>
          <MaxScaleDenominator>1e+07</MaxScaleDenominator>
        </Layer>
        <Layer queryable="1" opaque="0" cascaded="0">
          <Name>Inon2019_EauLibre_20190423_Outaouais_Radarsat2</Name>
          <Title>2019/04/23 - Eau libre - Outaouais - Radarsat2</Title>
          <KeywordList>
            <Keyword>eau</Keyword>
            <Keyword>libre</Keyword>
            <Keyword>Outaouais</Keyword>
            <Keyword>inondations</Keyword>
            <Keyword>23</Keyword>
            <Keyword>avril</Keyword>
            <Keyword>2019</Keyword>
            <Keyword>Radarsat</Keyword>
            <Keyword>2</Keyword>
          </KeywordList>
          <CRS>EPSG:3857</CRS>
          <CRS>EPSG:2036</CRS>
          <CRS>EPSG:2037</CRS>
          <CRS>EPSG:2148</CRS>
          <CRS>EPSG:2149</CRS>
          <CRS>EPSG:2150</CRS>
          <CRS>EPSG:3797</CRS>
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
            <westBoundLongitude>-81.7467</westBoundLongitude>
            <eastBoundLongitude>-53.8989</eastBoundLongitude>
            <southBoundLatitude>44.2229</southBoundLatitude>
            <northBoundLatitude>55.7054</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:3857" minx="-9.1e+06" miny="5.5e+06" maxx="-6e+06" maxy="7.5e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=Inon2019_EauLibre_20190423_Outaouais_Radarsat2"/>
          </MetadataURL>
          <DataURL>
            <Format>text/html</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/cartographie-des-inondations-printemps-2019/resource/53ecf495-9320-47b4-9c9f-7edb9cbba0c5"/>
          </DataURL>
          <Style>
            <Name>RnCan</Name>
            <Title>RnCan</Title>
            <LegendURL width="193" height="113">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=Inon2019_EauLibre_20190423_Outaouais_Radarsat2&amp;format=image/png&amp;STYLE=RnCan"/>
            </LegendURL>
          </Style>
          <MinScaleDenominator>1</MinScaleDenominator>
          <MaxScaleDenominator>1e+07</MaxScaleDenominator>
        </Layer>
        <Layer queryable="0" opaque="0" cascaded="0">
          <Name>20190506_infrarouge_StLaurent_Outaouais_Sentinel2</Name>
          <Title>2019/05/06 - Infrarouge - Saint-Laurent et Outaouais - Sentinel2</Title>
          <KeywordList>
            <Keyword>image</Keyword>
            <Keyword>Saint-Laurent</Keyword>
            <Keyword>Outaouais</Keyword>
            <Keyword>inondations</Keyword>
            <Keyword>21</Keyword>
            <Keyword>avril</Keyword>
            <Keyword>2019</Keyword>
            <Keyword>infrarouge</Keyword>
            <Keyword>Sentinel</Keyword>
            <Keyword>2</Keyword>
          </KeywordList>
          <CRS>EPSG:32198</CRS>
          <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:32198" minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=20190506_infrarouge_StLaurent_Outaouais_Sentinel2"/>
          </MetadataURL>
          <DataURL>
            <Format>text/html</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/cartographie-des-inondations-printemps-2019/resource/be4221e0-3d69-41f2-a42d-44f12c10cb85"/>
          </DataURL>
          <Style>
            <Name>default</Name>
            <Title>default</Title>
            <LegendURL width="150" height="32">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=20190506_infrarouge_StLaurent_Outaouais_Sentinel2&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
          <MinScaleDenominator>1</MinScaleDenominator>
          <MaxScaleDenominator>1e+07</MaxScaleDenominator>
        </Layer>
        <Layer queryable="1" opaque="0" cascaded="0">
          <Name>Inon2019_EauLibre_20190429_Gatineau_Radarsat2_Pleiade</Name>
          <Title>2019/04/29 - Eau libre - Gatineau - Radarsat 2 et Pléiade</Title>
          <KeywordList>
            <Keyword>eau</Keyword>
            <Keyword>libre</Keyword>
            <Keyword>Gatineau</Keyword>
            <Keyword>inondations</Keyword>
            <Keyword>29</Keyword>
            <Keyword>avril</Keyword>
            <Keyword>2019</Keyword>
            <Keyword>Radarsat</Keyword>
            <Keyword>2</Keyword>
            <Keyword>Pléiade</Keyword>
          </KeywordList>
          <CRS>EPSG:3857</CRS>
          <CRS>EPSG:2036</CRS>
          <CRS>EPSG:2037</CRS>
          <CRS>EPSG:2148</CRS>
          <CRS>EPSG:2149</CRS>
          <CRS>EPSG:2150</CRS>
          <CRS>EPSG:3797</CRS>
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
            <westBoundLongitude>-81.7467</westBoundLongitude>
            <eastBoundLongitude>-53.8989</eastBoundLongitude>
            <southBoundLatitude>44.2229</southBoundLatitude>
            <northBoundLatitude>55.7054</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:3857" minx="-9.1e+06" miny="5.5e+06" maxx="-6e+06" maxy="7.5e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=Inon2019_EauLibre_20190429_Gatineau_Radarsat2_Pleiade"/>
          </MetadataURL>
          <DataURL>
            <Format>text/html</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/cartographie-des-inondations-printemps-2019/resource/53ecf495-9320-47b4-9c9f-7edb9cbba0c5"/>
          </DataURL>
          <Style>
            <Name>RnCan</Name>
            <Title>RnCan</Title>
            <LegendURL width="193" height="113">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=Inon2019_EauLibre_20190429_Gatineau_Radarsat2_Pleiade&amp;format=image/png&amp;STYLE=RnCan"/>
            </LegendURL>
          </Style>
          <MinScaleDenominator>1</MinScaleDenominator>
          <MaxScaleDenominator>1e+07</MaxScaleDenominator>
        </Layer>
        <Layer queryable="1" opaque="0" cascaded="0">
          <Name>Inon2019_EauLibre_20190510_Pontiac_radarsat2</Name>
          <Title>2019/05/10 - Eau libre - Pontiac - Radarsat 2</Title>
          <KeywordList>
            <Keyword>eau</Keyword>
            <Keyword>libre</Keyword>
            <Keyword>Pontiac</Keyword>
            <Keyword>inondations</Keyword>
            <Keyword>10</Keyword>
            <Keyword>mai</Keyword>
            <Keyword>2019</Keyword>
            <Keyword>radarsat</Keyword>
            <Keyword>2</Keyword>
          </KeywordList>
          <CRS>EPSG:3857</CRS>
          <CRS>EPSG:2036</CRS>
          <CRS>EPSG:2037</CRS>
          <CRS>EPSG:2148</CRS>
          <CRS>EPSG:2149</CRS>
          <CRS>EPSG:2150</CRS>
          <CRS>EPSG:3797</CRS>
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
            <westBoundLongitude>-81.7467</westBoundLongitude>
            <eastBoundLongitude>-53.8989</eastBoundLongitude>
            <southBoundLatitude>44.2229</southBoundLatitude>
            <northBoundLatitude>55.7054</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:3857" minx="-9.1e+06" miny="5.5e+06" maxx="-6e+06" maxy="7.5e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=Inon2019_EauLibre_20190510_Pontiac_radarsat2"/>
          </MetadataURL>
          <DataURL>
            <Format>text/html</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/cartographie-des-inondations-printemps-2019/resource/53ecf495-9320-47b4-9c9f-7edb9cbba0c5"/>
          </DataURL>
          <Style>
            <Name>RnCan</Name>
            <Title>RnCan</Title>
            <LegendURL width="193" height="113">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=Inon2019_EauLibre_20190510_Pontiac_radarsat2&amp;format=image/png&amp;STYLE=RnCan"/>
            </LegendURL>
          </Style>
          <MinScaleDenominator>1</MinScaleDenominator>
          <MaxScaleDenominator>1e+07</MaxScaleDenominator>
        </Layer>
        <Layer queryable="1" opaque="0" cascaded="0">
          <Name>Inon2019_EauLibre_20190430_Gatineau_Radarsat2</Name>
          <Title>2019/04/30 - Eau libre - Gatineau - Radarsat 2</Title>
          <KeywordList>
            <Keyword>eau</Keyword>
            <Keyword>libre</Keyword>
            <Keyword>Gatineau</Keyword>
            <Keyword>inondations</Keyword>
            <Keyword>30</Keyword>
            <Keyword>avril</Keyword>
            <Keyword>2019</Keyword>
            <Keyword>Radarsat</Keyword>
            <Keyword>2</Keyword>
          </KeywordList>
          <CRS>EPSG:3857</CRS>
          <CRS>EPSG:2036</CRS>
          <CRS>EPSG:2037</CRS>
          <CRS>EPSG:2148</CRS>
          <CRS>EPSG:2149</CRS>
          <CRS>EPSG:2150</CRS>
          <CRS>EPSG:3797</CRS>
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
            <westBoundLongitude>-81.7467</westBoundLongitude>
            <eastBoundLongitude>-53.8989</eastBoundLongitude>
            <southBoundLatitude>44.2229</southBoundLatitude>
            <northBoundLatitude>55.7054</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:3857" minx="-9.1e+06" miny="5.5e+06" maxx="-6e+06" maxy="7.5e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=Inon2019_EauLibre_20190430_Gatineau_Radarsat2"/>
          </MetadataURL>
          <DataURL>
            <Format>text/html</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/cartographie-des-inondations-printemps-2019/resource/53ecf495-9320-47b4-9c9f-7edb9cbba0c5"/>
          </DataURL>
          <Style>
            <Name>RnCan</Name>
            <Title>RnCan</Title>
            <LegendURL width="193" height="113">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=Inon2019_EauLibre_20190430_Gatineau_Radarsat2&amp;format=image/png&amp;STYLE=RnCan"/>
            </LegendURL>
          </Style>
          <MinScaleDenominator>1</MinScaleDenominator>
          <MaxScaleDenominator>1e+07</MaxScaleDenominator>
        </Layer>
        <Layer queryable="1" opaque="0" cascaded="0">
          <Name>Inon2019_EauLibre_20190501_Gatineau_terrasarx</Name>
          <Title>2019/05/01 - Eau libre - Gatineau - TerraSAR-X</Title>
          <KeywordList>
            <Keyword>eau</Keyword>
            <Keyword>libre</Keyword>
            <Keyword>Gatineau</Keyword>
            <Keyword>inondations</Keyword>
            <Keyword>1</Keyword>
            <Keyword>mai</Keyword>
            <Keyword>2019</Keyword>
            <Keyword>TerraSAR-X</Keyword>
          </KeywordList>
          <CRS>EPSG:3857</CRS>
          <CRS>EPSG:2036</CRS>
          <CRS>EPSG:2037</CRS>
          <CRS>EPSG:2148</CRS>
          <CRS>EPSG:2149</CRS>
          <CRS>EPSG:2150</CRS>
          <CRS>EPSG:3797</CRS>
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
            <westBoundLongitude>-81.7467</westBoundLongitude>
            <eastBoundLongitude>-53.8989</eastBoundLongitude>
            <southBoundLatitude>44.2229</southBoundLatitude>
            <northBoundLatitude>55.7054</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:3857" minx="-9.1e+06" miny="5.5e+06" maxx="-6e+06" maxy="7.5e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=Inon2019_EauLibre_20190501_Gatineau_terrasarx"/>
          </MetadataURL>
          <DataURL>
            <Format>text/html</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/cartographie-des-inondations-printemps-2019/resource/53ecf495-9320-47b4-9c9f-7edb9cbba0c5"/>
          </DataURL>
          <Style>
            <Name>RnCan</Name>
            <Title>RnCan</Title>
            <LegendURL width="193" height="113">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=Inon2019_EauLibre_20190501_Gatineau_terrasarx&amp;format=image/png&amp;STYLE=RnCan"/>
            </LegendURL>
          </Style>
          <MinScaleDenominator>1</MinScaleDenominator>
          <MaxScaleDenominator>1e+07</MaxScaleDenominator>
        </Layer>
        <Layer queryable="1" opaque="0" cascaded="0">
          <Name>Inon2019_EauLibre_20190508_lacstpierre_sentinel1</Name>
          <Title>2019/05/08 - Eau libre - Lac St-Pierre - Sentinel 1</Title>
          <KeywordList>
            <Keyword>eau</Keyword>
            <Keyword>libre</Keyword>
            <Keyword>lac</Keyword>
            <Keyword>Saint-Pierre</Keyword>
            <Keyword>inondations</Keyword>
            <Keyword>8</Keyword>
            <Keyword>mai</Keyword>
            <Keyword>2019</Keyword>
            <Keyword>Sentinel</Keyword>
            <Keyword>1</Keyword>
          </KeywordList>
          <CRS>EPSG:32198</CRS>
          <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:32198" minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=Inon2019_EauLibre_20190508_lacstpierre_sentinel1"/>
          </MetadataURL>
          <DataURL>
            <Format>text/html</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/cartographie-des-inondations-printemps-2019/resource/53ecf495-9320-47b4-9c9f-7edb9cbba0c5"/>
          </DataURL>
          <Style>
            <Name>RnCan</Name>
            <Title>RnCan</Title>
            <LegendURL width="193" height="86">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=Inon2019_EauLibre_20190508_lacstpierre_sentinel1&amp;format=image/png&amp;STYLE=RnCan"/>
            </LegendURL>
          </Style>
          <MinScaleDenominator>1</MinScaleDenominator>
          <MaxScaleDenominator>1e+07</MaxScaleDenominator>
        </Layer>
        <Layer queryable="1" opaque="0" cascaded="0">
          <Name>Inon2019_EauLibre_20190507_Gatineau_radarsat2</Name>
          <Title>2019/05/07 - Eau libre - Gatineau - Radarsat 2</Title>
          <KeywordList>
            <Keyword>eau</Keyword>
            <Keyword>libre</Keyword>
            <Keyword>Gatineau</Keyword>
            <Keyword>inondations</Keyword>
            <Keyword>7</Keyword>
            <Keyword>mai</Keyword>
            <Keyword>2019</Keyword>
            <Keyword>radarsat2</Keyword>
          </KeywordList>
          <CRS>EPSG:3857</CRS>
          <CRS>EPSG:2036</CRS>
          <CRS>EPSG:2037</CRS>
          <CRS>EPSG:2148</CRS>
          <CRS>EPSG:2149</CRS>
          <CRS>EPSG:2150</CRS>
          <CRS>EPSG:3797</CRS>
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
            <westBoundLongitude>-81.7467</westBoundLongitude>
            <eastBoundLongitude>-53.8989</eastBoundLongitude>
            <southBoundLatitude>44.2229</southBoundLatitude>
            <northBoundLatitude>55.7054</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:3857" minx="-9.1e+06" miny="5.5e+06" maxx="-6e+06" maxy="7.5e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=Inon2019_EauLibre_20190507_Gatineau_radarsat2"/>
          </MetadataURL>
          <DataURL>
            <Format>text/html</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/cartographie-des-inondations-printemps-2019/resource/53ecf495-9320-47b4-9c9f-7edb9cbba0c5"/>
          </DataURL>
          <Style>
            <Name>RnCan</Name>
            <Title>RnCan</Title>
            <LegendURL width="193" height="113">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=Inon2019_EauLibre_20190507_Gatineau_radarsat2&amp;format=image/png&amp;STYLE=RnCan"/>
            </LegendURL>
          </Style>
          <MinScaleDenominator>1</MinScaleDenominator>
          <MaxScaleDenominator>1e+07</MaxScaleDenominator>
        </Layer>
        <Layer queryable="0" opaque="0" cascaded="0">
          <Name>20190421_infrarouge_LacStPierre_Sentinel2</Name>
          <Title>2019/04/21 - Infrarouge - Lac Saint-Pierre - Sentinel 2</Title>
          <KeywordList>
            <Keyword>image</Keyword>
            <Keyword>lac</Keyword>
            <Keyword>Saint-Pierre</Keyword>
            <Keyword>inondations</Keyword>
            <Keyword>21</Keyword>
            <Keyword>avril</Keyword>
            <Keyword>2019</Keyword>
            <Keyword>infrarouge</Keyword>
            <Keyword>Sentinel</Keyword>
            <Keyword>2</Keyword>
          </KeywordList>
          <CRS>EPSG:32198</CRS>
          <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:32198" minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=20190421_infrarouge_LacStPierre_Sentinel2"/>
          </MetadataURL>
          <DataURL>
            <Format>text/html</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/cartographie-des-inondations-printemps-2019/resource/be4221e0-3d69-41f2-a42d-44f12c10cb85"/>
          </DataURL>
          <Style>
            <Name>default</Name>
            <Title>default</Title>
            <LegendURL width="160" height="32">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=20190421_infrarouge_LacStPierre_Sentinel2&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
          <MinScaleDenominator>1</MinScaleDenominator>
          <MaxScaleDenominator>1e+07</MaxScaleDenominator>
        </Layer>
        <Layer queryable="1" opaque="0" cascaded="0">
          <Name>Inon2019_EauLibre_20190510_gatineau_terrasarx</Name>
          <Title>2019/05/10 - Eau libre - Gatineau - TerraSAR-X</Title>
          <KeywordList>
            <Keyword>eau</Keyword>
            <Keyword>libre</Keyword>
            <Keyword>Gatineau</Keyword>
            <Keyword>inondations</Keyword>
            <Keyword>10</Keyword>
            <Keyword>mai</Keyword>
            <Keyword>2019</Keyword>
            <Keyword>TerraSAR-X</Keyword>
          </KeywordList>
          <CRS>EPSG:3857</CRS>
          <CRS>EPSG:2036</CRS>
          <CRS>EPSG:2037</CRS>
          <CRS>EPSG:2148</CRS>
          <CRS>EPSG:2149</CRS>
          <CRS>EPSG:2150</CRS>
          <CRS>EPSG:3797</CRS>
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
            <westBoundLongitude>-81.7467</westBoundLongitude>
            <eastBoundLongitude>-53.8989</eastBoundLongitude>
            <southBoundLatitude>44.2229</southBoundLatitude>
            <northBoundLatitude>55.7054</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:3857" minx="-9.1e+06" miny="5.5e+06" maxx="-6e+06" maxy="7.5e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=Inon2019_EauLibre_20190510_gatineau_terrasarx"/>
          </MetadataURL>
          <DataURL>
            <Format>text/html</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/cartographie-des-inondations-printemps-2019/resource/53ecf495-9320-47b4-9c9f-7edb9cbba0c5"/>
          </DataURL>
          <Style>
            <Name>RnCan</Name>
            <Title>RnCan</Title>
            <LegendURL width="193" height="113">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=Inon2019_EauLibre_20190510_gatineau_terrasarx&amp;format=image/png&amp;STYLE=RnCan"/>
            </LegendURL>
          </Style>
          <MinScaleDenominator>1</MinScaleDenominator>
          <MaxScaleDenominator>1e+07</MaxScaleDenominator>
        </Layer>
        <Layer queryable="1" opaque="0" cascaded="0">
          <Name>Inon2019_EauLibre_20190422_Chaudiere_Sentinel1</Name>
          <Title>2019/04/22 - Eau libre - Chaudière - Sentinel 1</Title>
          <KeywordList>
            <Keyword>eau</Keyword>
            <Keyword>libre</Keyword>
            <Keyword>rivière</Keyword>
            <Keyword>Chaudière</Keyword>
            <Keyword>inondations</Keyword>
            <Keyword>22</Keyword>
            <Keyword>avril</Keyword>
            <Keyword>2019</Keyword>
            <Keyword>Sentinel</Keyword>
            <Keyword>1</Keyword>
          </KeywordList>
          <CRS>EPSG:3857</CRS>
          <CRS>EPSG:2036</CRS>
          <CRS>EPSG:2037</CRS>
          <CRS>EPSG:2148</CRS>
          <CRS>EPSG:2149</CRS>
          <CRS>EPSG:2150</CRS>
          <CRS>EPSG:3797</CRS>
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
            <westBoundLongitude>-81.7467</westBoundLongitude>
            <eastBoundLongitude>-53.8989</eastBoundLongitude>
            <southBoundLatitude>44.2229</southBoundLatitude>
            <northBoundLatitude>55.7054</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:3857" minx="-9.1e+06" miny="5.5e+06" maxx="-6e+06" maxy="7.5e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=Inon2019_EauLibre_20190422_Chaudiere_Sentinel1"/>
          </MetadataURL>
          <DataURL>
            <Format>text/html</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/cartographie-des-inondations-printemps-2019/resource/53ecf495-9320-47b4-9c9f-7edb9cbba0c5"/>
          </DataURL>
          <Style>
            <Name>Dromadaire</Name>
            <Title>Dromadaire</Title>
            <LegendURL width="193" height="59">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=Inon2019_EauLibre_20190422_Chaudiere_Sentinel1&amp;format=image/png&amp;STYLE=Dromadaire"/>
            </LegendURL>
          </Style>
          <MinScaleDenominator>1</MinScaleDenominator>
          <MaxScaleDenominator>1e+07</MaxScaleDenominator>
        </Layer>
        <Layer queryable="1" opaque="0" cascaded="0">
          <Name>Inon2019_EauLibre_20190425_lac2montagnes_Alos2Palsar</Name>
          <Title>2019/04/25 - Eau libre - Lac des Deux Montagnes - ALOS2-PALSAR</Title>
          <KeywordList>
            <Keyword>eau</Keyword>
            <Keyword>libre</Keyword>
            <Keyword>lac</Keyword>
            <Keyword>Deux-Montagnes</Keyword>
            <Keyword>inondations</Keyword>
            <Keyword>25</Keyword>
            <Keyword>avril</Keyword>
            <Keyword>2019</Keyword>
            <Keyword>ALOS2-PALSAR</Keyword>
          </KeywordList>
          <CRS>EPSG:3857</CRS>
          <CRS>EPSG:2036</CRS>
          <CRS>EPSG:2037</CRS>
          <CRS>EPSG:2148</CRS>
          <CRS>EPSG:2149</CRS>
          <CRS>EPSG:2150</CRS>
          <CRS>EPSG:3797</CRS>
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
            <westBoundLongitude>-81.7467</westBoundLongitude>
            <eastBoundLongitude>-53.8989</eastBoundLongitude>
            <southBoundLatitude>44.2229</southBoundLatitude>
            <northBoundLatitude>55.7054</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:3857" minx="-9.1e+06" miny="5.5e+06" maxx="-6e+06" maxy="7.5e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=Inon2019_EauLibre_20190425_lac2montagnes_Alos2Palsar"/>
          </MetadataURL>
          <DataURL>
            <Format>text/html</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/cartographie-des-inondations-printemps-2019/resource/53ecf495-9320-47b4-9c9f-7edb9cbba0c5"/>
          </DataURL>
          <Style>
            <Name>RnCan</Name>
            <Title>RnCan</Title>
            <LegendURL width="193" height="113">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=Inon2019_EauLibre_20190425_lac2montagnes_Alos2Palsar&amp;format=image/png&amp;STYLE=RnCan"/>
            </LegendURL>
          </Style>
          <MinScaleDenominator>1</MinScaleDenominator>
          <MaxScaleDenominator>1e+07</MaxScaleDenominator>
        </Layer>
        <Layer queryable="1" opaque="0" cascaded="0">
          <Name>Inon2019_EauLibre_20190511_lacstpierre_radarsat2</Name>
          <Title>2019/05/11 - Eau libre - Lac Saint-Pierre - Radarsat 2</Title>
          <KeywordList>
            <Keyword>eau</Keyword>
            <Keyword>libre</Keyword>
            <Keyword>lac</Keyword>
            <Keyword>Saint-Pierre</Keyword>
            <Keyword>inondations</Keyword>
            <Keyword>11</Keyword>
            <Keyword>mai</Keyword>
            <Keyword>2019</Keyword>
            <Keyword>radarsat</Keyword>
            <Keyword>2</Keyword>
          </KeywordList>
          <CRS>EPSG:3857</CRS>
          <CRS>EPSG:2036</CRS>
          <CRS>EPSG:2037</CRS>
          <CRS>EPSG:2148</CRS>
          <CRS>EPSG:2149</CRS>
          <CRS>EPSG:2150</CRS>
          <CRS>EPSG:3797</CRS>
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
            <westBoundLongitude>-81.7467</westBoundLongitude>
            <eastBoundLongitude>-53.8989</eastBoundLongitude>
            <southBoundLatitude>44.2229</southBoundLatitude>
            <northBoundLatitude>55.7054</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:3857" minx="-9.1e+06" miny="5.5e+06" maxx="-6e+06" maxy="7.5e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=Inon2019_EauLibre_20190511_lacstpierre_radarsat2"/>
          </MetadataURL>
          <DataURL>
            <Format>text/html</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/cartographie-des-inondations-printemps-2019/resource/53ecf495-9320-47b4-9c9f-7edb9cbba0c5"/>
          </DataURL>
          <Style>
            <Name>RnCan</Name>
            <Title>RnCan</Title>
            <LegendURL width="193" height="113">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=Inon2019_EauLibre_20190511_lacstpierre_radarsat2&amp;format=image/png&amp;STYLE=RnCan"/>
            </LegendURL>
          </Style>
          <MinScaleDenominator>1</MinScaleDenominator>
          <MaxScaleDenominator>1e+07</MaxScaleDenominator>
        </Layer>
        <Layer queryable="1" opaque="0" cascaded="0">
          <Name>Inon2019_EauLibre_20190427_LacDeuxMontagnes_Radarsat2</Name>
          <Title>2019/04/27 - Eau libre - Lac des Deux Montagnes - Radarsat 2</Title>
          <KeywordList>
            <Keyword>eau</Keyword>
            <Keyword>libre</Keyword>
            <Keyword>Lac</Keyword>
            <Keyword>Deux-Montagnes</Keyword>
            <Keyword>inondations</Keyword>
            <Keyword>27</Keyword>
            <Keyword>avril</Keyword>
            <Keyword>2019</Keyword>
            <Keyword>Radarsat</Keyword>
            <Keyword>2</Keyword>
          </KeywordList>
          <CRS>EPSG:3857</CRS>
          <CRS>EPSG:2036</CRS>
          <CRS>EPSG:2037</CRS>
          <CRS>EPSG:2148</CRS>
          <CRS>EPSG:2149</CRS>
          <CRS>EPSG:2150</CRS>
          <CRS>EPSG:3797</CRS>
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
            <westBoundLongitude>-81.7467</westBoundLongitude>
            <eastBoundLongitude>-53.8989</eastBoundLongitude>
            <southBoundLatitude>44.2229</southBoundLatitude>
            <northBoundLatitude>55.7054</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:3857" minx="-9.1e+06" miny="5.5e+06" maxx="-6e+06" maxy="7.5e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=Inon2019_EauLibre_20190427_LacDeuxMontagnes_Radarsat2"/>
          </MetadataURL>
          <DataURL>
            <Format>text/html</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/cartographie-des-inondations-printemps-2019/resource/53ecf495-9320-47b4-9c9f-7edb9cbba0c5"/>
          </DataURL>
          <Style>
            <Name>RnCan</Name>
            <Title>RnCan</Title>
            <LegendURL width="193" height="113">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=Inon2019_EauLibre_20190427_LacDeuxMontagnes_Radarsat2&amp;format=image/png&amp;STYLE=RnCan"/>
            </LegendURL>
          </Style>
          <MinScaleDenominator>1</MinScaleDenominator>
          <MaxScaleDenominator>1e+07</MaxScaleDenominator>
        </Layer>
        <Layer queryable="1" opaque="0" cascaded="0">
          <Name>Inon2019_EauLibre_20190427_LacSaintPierre_Radarsat2</Name>
          <Title>2019/04/27 - Eau libre - Lac Saint-Pierre - Radarsat 2</Title>
          <KeywordList>
            <Keyword>eau</Keyword>
            <Keyword>libre</Keyword>
            <Keyword>Lac</Keyword>
            <Keyword>Saint-Pierre</Keyword>
            <Keyword>inondations</Keyword>
            <Keyword>27</Keyword>
            <Keyword>avril</Keyword>
            <Keyword>2019</Keyword>
            <Keyword>Radarsat</Keyword>
            <Keyword>2</Keyword>
          </KeywordList>
          <CRS>EPSG:3857</CRS>
          <CRS>EPSG:2036</CRS>
          <CRS>EPSG:2037</CRS>
          <CRS>EPSG:2148</CRS>
          <CRS>EPSG:2149</CRS>
          <CRS>EPSG:2150</CRS>
          <CRS>EPSG:3797</CRS>
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
            <westBoundLongitude>-81.7467</westBoundLongitude>
            <eastBoundLongitude>-53.8989</eastBoundLongitude>
            <southBoundLatitude>44.2229</southBoundLatitude>
            <northBoundLatitude>55.7054</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:3857" minx="-9.1e+06" miny="5.5e+06" maxx="-6e+06" maxy="7.5e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=Inon2019_EauLibre_20190427_LacSaintPierre_Radarsat2"/>
          </MetadataURL>
          <DataURL>
            <Format>text/html</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/cartographie-des-inondations-printemps-2019/resource/53ecf495-9320-47b4-9c9f-7edb9cbba0c5"/>
          </DataURL>
          <Style>
            <Name>RnCan</Name>
            <Title>RnCan</Title>
            <LegendURL width="193" height="113">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=Inon2019_EauLibre_20190427_LacSaintPierre_Radarsat2&amp;format=image/png&amp;STYLE=RnCan"/>
            </LegendURL>
          </Style>
          <MinScaleDenominator>1</MinScaleDenominator>
          <MaxScaleDenominator>1e+07</MaxScaleDenominator>
        </Layer>
        <Layer queryable="1" opaque="0" cascaded="0">
          <Name>Inon2019_EauLibre_20190429_LacSaintPierre_Pleiade</Name>
          <Title>2019/04/29 - Eau libre - Lac Saint-Pierre - Pleiade</Title>
          <KeywordList>
            <Keyword>eau</Keyword>
            <Keyword>libre</Keyword>
            <Keyword>lac</Keyword>
            <Keyword>Saint-Pierre</Keyword>
            <Keyword>inondations</Keyword>
            <Keyword>29</Keyword>
            <Keyword>avril</Keyword>
            <Keyword>2019</Keyword>
            <Keyword>Pléiade</Keyword>
          </KeywordList>
          <CRS>EPSG:3857</CRS>
          <CRS>EPSG:2036</CRS>
          <CRS>EPSG:2037</CRS>
          <CRS>EPSG:2148</CRS>
          <CRS>EPSG:2149</CRS>
          <CRS>EPSG:2150</CRS>
          <CRS>EPSG:3797</CRS>
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
            <westBoundLongitude>-81.7467</westBoundLongitude>
            <eastBoundLongitude>-53.8989</eastBoundLongitude>
            <southBoundLatitude>44.2229</southBoundLatitude>
            <northBoundLatitude>55.7054</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:3857" minx="-9.1e+06" miny="5.5e+06" maxx="-6e+06" maxy="7.5e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=Inon2019_EauLibre_20190429_LacSaintPierre_Pleiade"/>
          </MetadataURL>
          <DataURL>
            <Format>text/html</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/cartographie-des-inondations-printemps-2019/resource/53ecf495-9320-47b4-9c9f-7edb9cbba0c5"/>
          </DataURL>
          <Style>
            <Name>RnCan</Name>
            <Title>RnCan</Title>
            <LegendURL width="193" height="113">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=Inon2019_EauLibre_20190429_LacSaintPierre_Pleiade&amp;format=image/png&amp;STYLE=RnCan"/>
            </LegendURL>
          </Style>
          <MinScaleDenominator>1</MinScaleDenominator>
          <MaxScaleDenominator>1e+07</MaxScaleDenominator>
        </Layer>
        <Layer queryable="1" opaque="0" cascaded="0">
          <Name>Inon2019_EauLibre_20190516_HautPontiac_Radarsat2</Name>
          <Title>2019/05/16 - Eau libre - Haut Pontiac - Radarsat 2</Title>
          <KeywordList>
            <Keyword>eau</Keyword>
            <Keyword>libre</Keyword>
            <Keyword>Haut-Pontiac</Keyword>
            <Keyword>inondations</Keyword>
            <Keyword>16</Keyword>
            <Keyword>mai</Keyword>
            <Keyword>2019</Keyword>
            <Keyword>Radarsat</Keyword>
            <Keyword>2</Keyword>
          </KeywordList>
          <CRS>EPSG:3857</CRS>
          <CRS>EPSG:2036</CRS>
          <CRS>EPSG:2037</CRS>
          <CRS>EPSG:2148</CRS>
          <CRS>EPSG:2149</CRS>
          <CRS>EPSG:2150</CRS>
          <CRS>EPSG:3797</CRS>
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
            <westBoundLongitude>-81.7467</westBoundLongitude>
            <eastBoundLongitude>-53.8989</eastBoundLongitude>
            <southBoundLatitude>44.2229</southBoundLatitude>
            <northBoundLatitude>55.7054</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:3857" minx="-9.1e+06" miny="5.5e+06" maxx="-6e+06" maxy="7.5e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=Inon2019_EauLibre_20190516_HautPontiac_Radarsat2"/>
          </MetadataURL>
          <DataURL>
            <Format>text/html</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/cartographie-des-inondations-printemps-2019/resource/53ecf495-9320-47b4-9c9f-7edb9cbba0c5"/>
          </DataURL>
          <Style>
            <Name>RnCan</Name>
            <Title>RnCan</Title>
            <LegendURL width="193" height="113">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=Inon2019_EauLibre_20190516_HautPontiac_Radarsat2&amp;format=image/png&amp;STYLE=RnCan"/>
            </LegendURL>
          </Style>
          <MinScaleDenominator>1</MinScaleDenominator>
          <MaxScaleDenominator>1e+07</MaxScaleDenominator>
        </Layer>
        <Layer queryable="1" opaque="0" cascaded="0">
          <Name>Inon2019_EauLibre_20190515_Gatineau_TerrasarX</Name>
          <Title>2019/05/15 - Eau libre - Gatineau - TerraSAR-X</Title>
          <KeywordList>
            <Keyword>eau</Keyword>
            <Keyword>libre</Keyword>
            <Keyword>Gatineau</Keyword>
            <Keyword>inondations</Keyword>
            <Keyword>15</Keyword>
            <Keyword>mai</Keyword>
            <Keyword>2019</Keyword>
            <Keyword>TerraSAR-X</Keyword>
          </KeywordList>
          <CRS>EPSG:3857</CRS>
          <CRS>EPSG:2036</CRS>
          <CRS>EPSG:2037</CRS>
          <CRS>EPSG:2148</CRS>
          <CRS>EPSG:2149</CRS>
          <CRS>EPSG:2150</CRS>
          <CRS>EPSG:3797</CRS>
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
            <westBoundLongitude>-81.7467</westBoundLongitude>
            <eastBoundLongitude>-53.8989</eastBoundLongitude>
            <southBoundLatitude>44.2229</southBoundLatitude>
            <northBoundLatitude>55.7054</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:3857" minx="-9.1e+06" miny="5.5e+06" maxx="-6e+06" maxy="7.5e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=Inon2019_EauLibre_20190515_Gatineau_TerrasarX"/>
          </MetadataURL>
          <DataURL>
            <Format>text/html</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/cartographie-des-inondations-printemps-2019/resource/53ecf495-9320-47b4-9c9f-7edb9cbba0c5"/>
          </DataURL>
          <Style>
            <Name>RnCan</Name>
            <Title>RnCan</Title>
            <LegendURL width="193" height="113">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=Inon2019_EauLibre_20190515_Gatineau_TerrasarX&amp;format=image/png&amp;STYLE=RnCan"/>
            </LegendURL>
          </Style>
          <MinScaleDenominator>1</MinScaleDenominator>
          <MaxScaleDenominator>1e+07</MaxScaleDenominator>
        </Layer>
        <Layer queryable="1" opaque="0" cascaded="0">
          <Name>Inon2019_EauLibre_20190422_Gatineau_Radarsat2_Pleiade</Name>
          <Title>2019/04/22 - Eau libre - Gatineau - Radarsat 2 et Pléiade</Title>
          <KeywordList>
            <Keyword>eau</Keyword>
            <Keyword>libre</Keyword>
            <Keyword>Gatineau</Keyword>
            <Keyword>inondations</Keyword>
            <Keyword>22</Keyword>
            <Keyword>avril</Keyword>
            <Keyword>2019</Keyword>
            <Keyword>Radarsat</Keyword>
            <Keyword>2</Keyword>
            <Keyword>Pleiade</Keyword>
          </KeywordList>
          <CRS>EPSG:3857</CRS>
          <CRS>EPSG:2036</CRS>
          <CRS>EPSG:2037</CRS>
          <CRS>EPSG:2148</CRS>
          <CRS>EPSG:2149</CRS>
          <CRS>EPSG:2150</CRS>
          <CRS>EPSG:3797</CRS>
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
            <westBoundLongitude>-81.7467</westBoundLongitude>
            <eastBoundLongitude>-53.8989</eastBoundLongitude>
            <southBoundLatitude>44.2229</southBoundLatitude>
            <northBoundLatitude>55.7054</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:3857" minx="-9.1e+06" miny="5.5e+06" maxx="-6e+06" maxy="7.5e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=Inon2019_EauLibre_20190422_Gatineau_Radarsat2_Pleiade"/>
          </MetadataURL>
          <DataURL>
            <Format>text/html</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/cartographie-des-inondations-printemps-2019/resource/53ecf495-9320-47b4-9c9f-7edb9cbba0c5"/>
          </DataURL>
          <Style>
            <Name>RnCan</Name>
            <Title>RnCan</Title>
            <LegendURL width="193" height="113">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=Inon2019_EauLibre_20190422_Gatineau_Radarsat2_Pleiade&amp;format=image/png&amp;STYLE=RnCan"/>
            </LegendURL>
          </Style>
          <MinScaleDenominator>1</MinScaleDenominator>
          <MaxScaleDenominator>1e+07</MaxScaleDenominator>
        </Layer>
        <Layer queryable="1" opaque="0" cascaded="0">
          <Name>Inon2019_EauLibre_20190514_LacDeuxMontagnes_Radarsat2</Name>
          <Title>2019/05/14 - Eau libre - Lac des Deux Montagnes - Radarsat 2</Title>
          <KeywordList>
            <Keyword>eau</Keyword>
            <Keyword>libre</Keyword>
            <Keyword>lac</Keyword>
            <Keyword>Deux</Keyword>
            <Keyword>Montagnes</Keyword>
            <Keyword>inondations</Keyword>
            <Keyword>13</Keyword>
            <Keyword>mai</Keyword>
            <Keyword>2019</Keyword>
            <Keyword>radarsat</Keyword>
            <Keyword>2</Keyword>
          </KeywordList>
          <CRS>EPSG:3857</CRS>
          <CRS>EPSG:2036</CRS>
          <CRS>EPSG:2037</CRS>
          <CRS>EPSG:2148</CRS>
          <CRS>EPSG:2149</CRS>
          <CRS>EPSG:2150</CRS>
          <CRS>EPSG:3797</CRS>
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
            <westBoundLongitude>-81.7467</westBoundLongitude>
            <eastBoundLongitude>-53.8989</eastBoundLongitude>
            <southBoundLatitude>44.2229</southBoundLatitude>
            <northBoundLatitude>55.7054</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:3857" minx="-9.1e+06" miny="5.5e+06" maxx="-6e+06" maxy="7.5e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=Inon2019_EauLibre_20190514_LacDeuxMontagnes_Radarsat2"/>
          </MetadataURL>
          <DataURL>
            <Format>text/html</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/cartographie-des-inondations-printemps-2019/resource/53ecf495-9320-47b4-9c9f-7edb9cbba0c5"/>
          </DataURL>
          <Style>
            <Name>RnCan</Name>
            <Title>RnCan</Title>
            <LegendURL width="193" height="113">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=Inon2019_EauLibre_20190514_LacDeuxMontagnes_Radarsat2&amp;format=image/png&amp;STYLE=RnCan"/>
            </LegendURL>
          </Style>
          <MinScaleDenominator>1</MinScaleDenominator>
          <MaxScaleDenominator>1e+07</MaxScaleDenominator>
        </Layer>
        <Layer queryable="1" opaque="0" cascaded="0">
          <Name>Inon2019_EauLibre_20190424_LacDeuxMontagnes_Radarsat2</Name>
          <Title>2019/04/24 - Eau libre - Lac des Deux Montagnes - Radarsat 2</Title>
          <KeywordList>
            <Keyword>eau</Keyword>
            <Keyword>libre</Keyword>
            <Keyword>lac</Keyword>
            <Keyword>Deux-Montagnes</Keyword>
            <Keyword>inondations</Keyword>
            <Keyword>24</Keyword>
            <Keyword>avril</Keyword>
            <Keyword>2019</Keyword>
            <Keyword>Radarsat</Keyword>
            <Keyword>2</Keyword>
          </KeywordList>
          <CRS>EPSG:3857</CRS>
          <CRS>EPSG:2036</CRS>
          <CRS>EPSG:2037</CRS>
          <CRS>EPSG:2148</CRS>
          <CRS>EPSG:2149</CRS>
          <CRS>EPSG:2150</CRS>
          <CRS>EPSG:3797</CRS>
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
            <westBoundLongitude>-81.7467</westBoundLongitude>
            <eastBoundLongitude>-53.8989</eastBoundLongitude>
            <southBoundLatitude>44.2229</southBoundLatitude>
            <northBoundLatitude>55.7054</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:3857" minx="-9.1e+06" miny="5.5e+06" maxx="-6e+06" maxy="7.5e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=Inon2019_EauLibre_20190424_LacDeuxMontagnes_Radarsat2"/>
          </MetadataURL>
          <DataURL>
            <Format>text/html</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/cartographie-des-inondations-printemps-2019/resource/53ecf495-9320-47b4-9c9f-7edb9cbba0c5"/>
          </DataURL>
          <Style>
            <Name>RnCan</Name>
            <Title>RnCan</Title>
            <LegendURL width="193" height="113">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=Inon2019_EauLibre_20190424_LacDeuxMontagnes_Radarsat2&amp;format=image/png&amp;STYLE=RnCan"/>
            </LegendURL>
          </Style>
          <MinScaleDenominator>1</MinScaleDenominator>
          <MaxScaleDenominator>1e+07</MaxScaleDenominator>
        </Layer>
        <Layer queryable="1" opaque="0" cascaded="0">
          <Name>Inon2019_EauLibre_20190513_Gatineau_Radarsat2</Name>
          <Title>2019/05/13 - Eau libre - Gatineau - Radarsat 2</Title>
          <KeywordList>
            <Keyword>eau</Keyword>
            <Keyword>libre</Keyword>
            <Keyword>Gatineau</Keyword>
            <Keyword>inondations</Keyword>
            <Keyword>13</Keyword>
            <Keyword>mai</Keyword>
            <Keyword>2019</Keyword>
            <Keyword>radarsat</Keyword>
            <Keyword>2</Keyword>
          </KeywordList>
          <CRS>EPSG:3857</CRS>
          <CRS>EPSG:2036</CRS>
          <CRS>EPSG:2037</CRS>
          <CRS>EPSG:2148</CRS>
          <CRS>EPSG:2149</CRS>
          <CRS>EPSG:2150</CRS>
          <CRS>EPSG:3797</CRS>
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
            <westBoundLongitude>-81.7467</westBoundLongitude>
            <eastBoundLongitude>-53.8989</eastBoundLongitude>
            <southBoundLatitude>44.2229</southBoundLatitude>
            <northBoundLatitude>55.7054</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:3857" minx="-9.1e+06" miny="5.5e+06" maxx="-6e+06" maxy="7.5e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=Inon2019_EauLibre_20190513_Gatineau_Radarsat2"/>
          </MetadataURL>
          <DataURL>
            <Format>text/html</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/cartographie-des-inondations-printemps-2019/resource/53ecf495-9320-47b4-9c9f-7edb9cbba0c5"/>
          </DataURL>
          <Style>
            <Name>RnCan</Name>
            <Title>RnCan</Title>
            <LegendURL width="193" height="113">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=Inon2019_EauLibre_20190513_Gatineau_Radarsat2&amp;format=image/png&amp;STYLE=RnCan"/>
            </LegendURL>
          </Style>
          <MinScaleDenominator>1</MinScaleDenominator>
          <MaxScaleDenominator>1e+07</MaxScaleDenominator>
        </Layer>
        <Layer queryable="1" opaque="0" cascaded="0">
          <Name>Inon2019_EauLibre_20190514_lacstpierre_Radarsat2</Name>
          <Title>2019/05/14 - Eau libre - Lac Saint-Pierre - Radarsat 2</Title>
          <KeywordList>
            <Keyword>eau</Keyword>
            <Keyword>libre</Keyword>
            <Keyword>lac</Keyword>
            <Keyword>Saint-Pierre</Keyword>
            <Keyword>inondations</Keyword>
            <Keyword>14</Keyword>
            <Keyword>mai</Keyword>
            <Keyword>2019</Keyword>
            <Keyword>radarsat</Keyword>
            <Keyword>2</Keyword>
          </KeywordList>
          <CRS>EPSG:3857</CRS>
          <CRS>EPSG:2036</CRS>
          <CRS>EPSG:2037</CRS>
          <CRS>EPSG:2148</CRS>
          <CRS>EPSG:2149</CRS>
          <CRS>EPSG:2150</CRS>
          <CRS>EPSG:3797</CRS>
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
            <westBoundLongitude>-81.7467</westBoundLongitude>
            <eastBoundLongitude>-53.8989</eastBoundLongitude>
            <southBoundLatitude>44.2229</southBoundLatitude>
            <northBoundLatitude>55.7054</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:3857" minx="-9.1e+06" miny="5.5e+06" maxx="-6e+06" maxy="7.5e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=Inon2019_EauLibre_20190514_lacstpierre_Radarsat2"/>
          </MetadataURL>
          <DataURL>
            <Format>text/html</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/cartographie-des-inondations-printemps-2019/resource/53ecf495-9320-47b4-9c9f-7edb9cbba0c5"/>
          </DataURL>
          <Style>
            <Name>RnCan</Name>
            <Title>RnCan</Title>
            <LegendURL width="193" height="113">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=Inon2019_EauLibre_20190514_lacstpierre_Radarsat2&amp;format=image/png&amp;STYLE=RnCan"/>
            </LegendURL>
          </Style>
          <MinScaleDenominator>1</MinScaleDenominator>
          <MaxScaleDenominator>1e+07</MaxScaleDenominator>
        </Layer>
        <Layer queryable="1" opaque="0" cascaded="0">
          <Name>Inon2019_EauLibre_20190514_Outaouais_Sentinel1</Name>
          <Title>2019/05/14 - Eau libre - Outaouais - Sentinel 1</Title>
          <KeywordList>
            <Keyword>eau</Keyword>
            <Keyword>libre</Keyword>
            <Keyword>Outaouais</Keyword>
            <Keyword>inondations</Keyword>
            <Keyword>14</Keyword>
            <Keyword>mai</Keyword>
            <Keyword>2019</Keyword>
            <Keyword>Sentinel 1</Keyword>
          </KeywordList>
          <CRS>EPSG:32198</CRS>
          <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:32198" minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=Inon2019_EauLibre_20190514_Outaouais_Sentinel1"/>
          </MetadataURL>
          <DataURL>
            <Format>text/html</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/cartographie-des-inondations-printemps-2019/resource/53ecf495-9320-47b4-9c9f-7edb9cbba0c5"/>
          </DataURL>
          <Style>
            <Name>RnCan</Name>
            <Title>RnCan</Title>
            <LegendURL width="193" height="59">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=Inon2019_EauLibre_20190514_Outaouais_Sentinel1&amp;format=image/png&amp;STYLE=RnCan"/>
            </LegendURL>
          </Style>
          <MinScaleDenominator>1</MinScaleDenominator>
          <MaxScaleDenominator>1e+07</MaxScaleDenominator>
        </Layer>
        <Layer queryable="1" opaque="0" cascaded="0">
          <Name>Inon2019_EauLibre_20190426_Gatineau_Radarsat2</Name>
          <Title>2019/04/26 - Eau libre - Gatineau - Radarsat 2</Title>
          <KeywordList>
            <Keyword>eau</Keyword>
            <Keyword>libre</Keyword>
            <Keyword>Gatineau</Keyword>
            <Keyword>inondations</Keyword>
            <Keyword>26</Keyword>
            <Keyword>avril</Keyword>
            <Keyword>2019</Keyword>
            <Keyword>radarsat2</Keyword>
          </KeywordList>
          <CRS>EPSG:3857</CRS>
          <CRS>EPSG:2036</CRS>
          <CRS>EPSG:2037</CRS>
          <CRS>EPSG:2148</CRS>
          <CRS>EPSG:2149</CRS>
          <CRS>EPSG:2150</CRS>
          <CRS>EPSG:3797</CRS>
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
            <westBoundLongitude>-81.7467</westBoundLongitude>
            <eastBoundLongitude>-53.8989</eastBoundLongitude>
            <southBoundLatitude>44.2229</southBoundLatitude>
            <northBoundLatitude>55.7054</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:3857" minx="-9.1e+06" miny="5.5e+06" maxx="-6e+06" maxy="7.5e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=Inon2019_EauLibre_20190426_Gatineau_Radarsat2"/>
          </MetadataURL>
          <DataURL>
            <Format>text/html</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/cartographie-des-inondations-printemps-2019/resource/53ecf495-9320-47b4-9c9f-7edb9cbba0c5"/>
          </DataURL>
          <Style>
            <Name>RnCan</Name>
            <Title>RnCan</Title>
            <LegendURL width="193" height="113">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=Inon2019_EauLibre_20190426_Gatineau_Radarsat2&amp;format=image/png&amp;STYLE=RnCan"/>
            </LegendURL>
          </Style>
          <MinScaleDenominator>1</MinScaleDenominator>
          <MaxScaleDenominator>1e+07</MaxScaleDenominator>
        </Layer>
        <Layer queryable="1" opaque="0" cascaded="0">
          <Name>Inon2019_EauLibre_20190426_Outaouais_Sentinel1B</Name>
          <Title>2019/04/26 - Eau libre - Outaouais - Sentinel 1B</Title>
          <KeywordList>
            <Keyword>eau</Keyword>
            <Keyword>libre</Keyword>
            <Keyword>Outaouais</Keyword>
            <Keyword>inondations</Keyword>
            <Keyword>26</Keyword>
            <Keyword>avril</Keyword>
            <Keyword>2019</Keyword>
            <Keyword>Sentinel</Keyword>
            <Keyword>1B</Keyword>
          </KeywordList>
          <CRS>EPSG:3857</CRS>
          <CRS>EPSG:2036</CRS>
          <CRS>EPSG:2037</CRS>
          <CRS>EPSG:2148</CRS>
          <CRS>EPSG:2149</CRS>
          <CRS>EPSG:2150</CRS>
          <CRS>EPSG:3797</CRS>
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
            <westBoundLongitude>-81.7467</westBoundLongitude>
            <eastBoundLongitude>-53.8989</eastBoundLongitude>
            <southBoundLatitude>44.2229</southBoundLatitude>
            <northBoundLatitude>55.7054</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:3857" minx="-9.1e+06" miny="5.5e+06" maxx="-6e+06" maxy="7.5e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=Inon2019_EauLibre_20190426_Outaouais_Sentinel1B"/>
          </MetadataURL>
          <DataURL>
            <Format>text/html</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/cartographie-des-inondations-printemps-2019/resource/53ecf495-9320-47b4-9c9f-7edb9cbba0c5"/>
          </DataURL>
          <Style>
            <Name>RnCan</Name>
            <Title>RnCan</Title>
            <LegendURL width="193" height="113">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=Inon2019_EauLibre_20190426_Outaouais_Sentinel1B&amp;format=image/png&amp;STYLE=RnCan"/>
            </LegendURL>
          </Style>
          <MinScaleDenominator>1</MinScaleDenominator>
          <MaxScaleDenominator>1e+07</MaxScaleDenominator>
        </Layer>
      </Layer>
      <Layer queryable="1">
        <Name>Inondations_2023</Name>
        <Title>Inondations 2023</Title>
        <Abstract>Inondations_2023</Abstract>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="193" height="2840">
            <Format>image/png</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=Inondations_2023&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
        <Layer queryable="1" opaque="0" cascaded="0">
          <Name>Inon2023_EauLibre_20230507_Montreal_RCM</Name>
          <Title>2023/05/07 - Eau libre - Montréal - RCM</Title>
          <KeywordList>
            <Keyword>inondé</Keyword>
            <Keyword>inondés</Keyword>
            <Keyword>inondée</Keyword>
            <Keyword>inondées</Keyword>
            <Keyword>inondation</Keyword>
            <Keyword>inondations</Keyword>
          </KeywordList>
          <CRS>EPSG:3857</CRS>
          <CRS>EPSG:2036</CRS>
          <CRS>EPSG:2037</CRS>
          <CRS>EPSG:2148</CRS>
          <CRS>EPSG:2149</CRS>
          <CRS>EPSG:2150</CRS>
          <CRS>EPSG:3797</CRS>
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
            <westBoundLongitude>-81.7467</westBoundLongitude>
            <eastBoundLongitude>-53.8989</eastBoundLongitude>
            <southBoundLatitude>44.2229</southBoundLatitude>
            <northBoundLatitude>55.7054</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:3857" minx="-9.1e+06" miny="5.5e+06" maxx="-6e+06" maxy="7.5e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=Inon2023_EauLibre_20230507_Montreal_RCM"/>
          </MetadataURL>
          <DataURL>
            <Format>text/html</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/cartographie-des-inondations-du-printemps-2023"/>
          </DataURL>
          <Style>
            <Name>default</Name>
            <Title>default</Title>
            <LegendURL width="193" height="113">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=Inon2023_EauLibre_20230507_Montreal_RCM&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
        </Layer>
        <Layer queryable="1" opaque="0" cascaded="0">
          <Name>Inon2023_EauLibre_20230504_HautOutaouais_RCM</Name>
          <Title>2023/05/04 - Eau libre - Outaouais supérieur - RCM</Title>
          <KeywordList>
            <Keyword>inondé</Keyword>
            <Keyword>inondés</Keyword>
            <Keyword>inondée</Keyword>
            <Keyword>inondées</Keyword>
            <Keyword>inondation</Keyword>
            <Keyword>inondations</Keyword>
          </KeywordList>
          <CRS>EPSG:3857</CRS>
          <CRS>EPSG:2036</CRS>
          <CRS>EPSG:2037</CRS>
          <CRS>EPSG:2148</CRS>
          <CRS>EPSG:2149</CRS>
          <CRS>EPSG:2150</CRS>
          <CRS>EPSG:3797</CRS>
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
            <westBoundLongitude>-81.7467</westBoundLongitude>
            <eastBoundLongitude>-53.8989</eastBoundLongitude>
            <southBoundLatitude>44.2229</southBoundLatitude>
            <northBoundLatitude>55.7054</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:3857" minx="-9.1e+06" miny="5.5e+06" maxx="-6e+06" maxy="7.5e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=Inon2023_EauLibre_20230504_HautOutaouais_RCM"/>
          </MetadataURL>
          <DataURL>
            <Format>text/html</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/cartographie-des-inondations-du-printemps-2023"/>
          </DataURL>
          <Style>
            <Name>default</Name>
            <Title>default</Title>
            <LegendURL width="193" height="113">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=Inon2023_EauLibre_20230504_HautOutaouais_RCM&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
        </Layer>
        <Layer queryable="0" opaque="0" cascaded="0">
          <Name>20230420_infrarouge_Gatineau_Sentinel2</Name>
          <Title>2023/04/20 - Infrarouge - Gatineau - Sentinel2</Title>
          <KeywordList>
            <Keyword>sentinel</Keyword>
            <Keyword>radar</Keyword>
            <Keyword>carte</Keyword>
            <Keyword>inondation</Keyword>
            <Keyword>2023</Keyword>
          </KeywordList>
          <CRS>EPSG:32198</CRS>
          <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:32198" minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=20230420_infrarouge_Gatineau_Sentinel2"/>
          </MetadataURL>
          <DataURL>
            <Format>text/html</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/dataset/cartographie-des-inondations-du-printemps-2023"/>
          </DataURL>
          <Style>
            <Name>default</Name>
            <Title>default</Title>
            <LegendURL width="160" height="32">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=20230420_infrarouge_Gatineau_Sentinel2&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
        </Layer>
        <Layer queryable="1" opaque="0" cascaded="0">
          <Name>Inon2023_EauLibre_20230505_HautOutaouais_RCM</Name>
          <Title>2023/05/05 - Eau libre - Outaouais supérieur - RCM</Title>
          <KeywordList>
            <Keyword>inondé</Keyword>
            <Keyword>inondés</Keyword>
            <Keyword>inondée</Keyword>
            <Keyword>inondées</Keyword>
            <Keyword>inondation</Keyword>
            <Keyword>inondations</Keyword>
          </KeywordList>
          <CRS>EPSG:3857</CRS>
          <CRS>EPSG:2036</CRS>
          <CRS>EPSG:2037</CRS>
          <CRS>EPSG:2148</CRS>
          <CRS>EPSG:2149</CRS>
          <CRS>EPSG:2150</CRS>
          <CRS>EPSG:3797</CRS>
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
            <westBoundLongitude>-81.7467</westBoundLongitude>
            <eastBoundLongitude>-53.8989</eastBoundLongitude>
            <southBoundLatitude>44.2229</southBoundLatitude>
            <northBoundLatitude>55.7054</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:3857" minx="-9.1e+06" miny="5.5e+06" maxx="-6e+06" maxy="7.5e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=Inon2023_EauLibre_20230505_HautOutaouais_RCM"/>
          </MetadataURL>
          <DataURL>
            <Format>text/html</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/cartographie-des-inondations-du-printemps-2023"/>
          </DataURL>
          <Style>
            <Name>default</Name>
            <Title>default</Title>
            <LegendURL width="193" height="113">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=Inon2023_EauLibre_20230505_HautOutaouais_RCM&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
        </Layer>
        <Layer queryable="1" opaque="0" cascaded="0">
          <Name>vg_observation_inondation_16avril2023_mun_tout_v</Name>
          <Title>Municipalités touchées depuis le 14 avril 2023</Title>
          <KeywordList>
            <Keyword>historique</Keyword>
            <Keyword>événements</Keyword>
            <Keyword>inondations</Keyword>
          </KeywordList>
          <CRS>EPSG:32198</CRS>
          <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:32198" minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06"/>
          <Dimension name="time" units="ISO8601" nearestValue="0">2023-04-14T04:00:00Z/2023-05-13T04:00:00Z</Dimension>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=vg_observation_inondation_16avril2023_mun_tout_v"/>
          </MetadataURL>
          <DataURL>
            <Format>text/html</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/dataset/cartographie-des-inondations-du-printemps-2023"/>
          </DataURL>
          <Style>
            <Name>default</Name>
            <Title>default</Title>
            <LegendURL width="106" height="32">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=vg_observation_inondation_16avril2023_mun_tout_v&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
          <MinScaleDenominator>10000</MinScaleDenominator>
        </Layer>
        <Layer queryable="0" opaque="0" cascaded="0">
          <Name>msp_inondations2023_20230505_infrarouge_Montreal_Sentinel2</Name>
          <Title>2023/05/05 - Infrarouge - Montréal - Sentinel2</Title>
          <KeywordList>
            <Keyword>sentinel</Keyword>
            <Keyword>radar</Keyword>
            <Keyword>carte</Keyword>
            <Keyword>inondation</Keyword>
            <Keyword>2023</Keyword>
          </KeywordList>
          <CRS>EPSG:32198</CRS>
          <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:32198" minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=msp_inondations2023_20230505_infrarouge_Montreal_Sentinel2"/>
          </MetadataURL>
          <DataURL>
            <Format>text/html</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/dataset/cartographie-des-inondations-du-printemps-2023"/>
          </DataURL>
          <Style>
            <Name>default</Name>
            <Title>default</Title>
            <LegendURL width="150" height="32">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=msp_inondations2023_20230505_infrarouge_Montreal_Sentinel2&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
        </Layer>
        <Layer queryable="1" opaque="0" cascaded="0">
          <Name>vg_observation_v_inondation_16avril2023_wmst</Name>
          <Title>Événements d'inondation depuis le 14 avril 2023</Title>
          <KeywordList>
            <Keyword>historique</Keyword>
            <Keyword>événements</Keyword>
            <Keyword>inondations</Keyword>
            <Keyword>observations</Keyword>
          </KeywordList>
          <CRS>EPSG:32198</CRS>
          <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:32198" minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06"/>
          <Dimension name="time" units="ISO8601" nearestValue="0">2023-04-14T04:00:00Z/2023-05-13T04:00:00Z</Dimension>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=vg_observation_v_inondation_16avril2023_wmst"/>
          </MetadataURL>
          <DataURL>
            <Format>text/html</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/dataset/cartographie-des-inondations-du-printemps-2023"/>
          </DataURL>
          <Style>
            <Name>default</Name>
            <Title>default</Title>
            <LegendURL width="98" height="32">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=vg_observation_v_inondation_16avril2023_wmst&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
        </Layer>
        <Layer queryable="1" opaque="0" cascaded="0">
          <Name>Inon2023_EauLibre_20230424_Gatineau_RCM</Name>
          <Title>2023/04/24 - Eau libre - Gatineau - RCM</Title>
          <KeywordList>
            <Keyword>inondé</Keyword>
            <Keyword>inondés</Keyword>
            <Keyword>inondée</Keyword>
            <Keyword>inondées</Keyword>
            <Keyword>inondation</Keyword>
            <Keyword>inondations</Keyword>
          </KeywordList>
          <CRS>EPSG:3857</CRS>
          <CRS>EPSG:2036</CRS>
          <CRS>EPSG:2037</CRS>
          <CRS>EPSG:2148</CRS>
          <CRS>EPSG:2149</CRS>
          <CRS>EPSG:2150</CRS>
          <CRS>EPSG:3797</CRS>
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
            <westBoundLongitude>-81.7467</westBoundLongitude>
            <eastBoundLongitude>-53.8989</eastBoundLongitude>
            <southBoundLatitude>44.2229</southBoundLatitude>
            <northBoundLatitude>55.7054</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:3857" minx="-9.1e+06" miny="5.5e+06" maxx="-6e+06" maxy="7.5e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=Inon2023_EauLibre_20230424_Gatineau_RCM"/>
          </MetadataURL>
          <DataURL>
            <Format>text/html</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/cartographie-des-inondations-du-printemps-2023"/>
          </DataURL>
          <Style>
            <Name>default</Name>
            <Title>default</Title>
            <LegendURL width="193" height="113">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=Inon2023_EauLibre_20230424_Gatineau_RCM&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
        </Layer>
        <Layer queryable="1" opaque="0" cascaded="0">
          <Name>Inon2023_EauLibre_20230502_Montreal_RCM</Name>
          <Title>2023/05/02 - Eau libre - Montréal - RCM</Title>
          <KeywordList>
            <Keyword>inondé</Keyword>
            <Keyword>inondés</Keyword>
            <Keyword>inondée</Keyword>
            <Keyword>inondées</Keyword>
            <Keyword>inondation</Keyword>
            <Keyword>inondations</Keyword>
          </KeywordList>
          <CRS>EPSG:3857</CRS>
          <CRS>EPSG:2036</CRS>
          <CRS>EPSG:2037</CRS>
          <CRS>EPSG:2148</CRS>
          <CRS>EPSG:2149</CRS>
          <CRS>EPSG:2150</CRS>
          <CRS>EPSG:3797</CRS>
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
            <westBoundLongitude>-81.7467</westBoundLongitude>
            <eastBoundLongitude>-53.8989</eastBoundLongitude>
            <southBoundLatitude>44.2229</southBoundLatitude>
            <northBoundLatitude>55.7054</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:3857" minx="-9.1e+06" miny="5.5e+06" maxx="-6e+06" maxy="7.5e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=Inon2023_EauLibre_20230502_Montreal_RCM"/>
          </MetadataURL>
          <DataURL>
            <Format>text/html</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/cartographie-des-inondations-du-printemps-2023"/>
          </DataURL>
          <Style>
            <Name>default</Name>
            <Title>default</Title>
            <LegendURL width="193" height="113">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=Inon2023_EauLibre_20230502_Montreal_RCM&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
        </Layer>
        <Layer queryable="0" opaque="0" cascaded="0">
          <Name>20230420_infrarouge_Montreal_Sentinel2</Name>
          <Title>2023/04/20 - Infrarouge - Montréal - Sentinel2</Title>
          <KeywordList>
            <Keyword>sentinel</Keyword>
            <Keyword>radar</Keyword>
            <Keyword>carte</Keyword>
            <Keyword>inondation</Keyword>
            <Keyword>2023</Keyword>
          </KeywordList>
          <CRS>EPSG:32198</CRS>
          <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:32198" minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=20230420_infrarouge_Montreal_Sentinel2"/>
          </MetadataURL>
          <DataURL>
            <Format>text/html</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/dataset/cartographie-des-inondations-du-printemps-2023"/>
          </DataURL>
          <Style>
            <Name>default</Name>
            <Title>default</Title>
            <LegendURL width="160" height="32">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=20230420_infrarouge_Montreal_Sentinel2&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
        </Layer>
        <Layer queryable="1" opaque="0" cascaded="0">
          <Name>Inon2023_EauLibre_20230418_LacSaintPierre_Sentinel1</Name>
          <Title>2023/04/18 - Eau libre - Lac Saint-Pierre - Sentinel 1</Title>
          <KeywordList>
            <Keyword>inondé</Keyword>
            <Keyword>inondés</Keyword>
            <Keyword>inondée</Keyword>
            <Keyword>inondées</Keyword>
            <Keyword>inondation</Keyword>
            <Keyword>inondations</Keyword>
          </KeywordList>
          <CRS>EPSG:3857</CRS>
          <CRS>EPSG:2036</CRS>
          <CRS>EPSG:2037</CRS>
          <CRS>EPSG:2148</CRS>
          <CRS>EPSG:2149</CRS>
          <CRS>EPSG:2150</CRS>
          <CRS>EPSG:3797</CRS>
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
            <westBoundLongitude>-81.7467</westBoundLongitude>
            <eastBoundLongitude>-53.8989</eastBoundLongitude>
            <southBoundLatitude>44.2229</southBoundLatitude>
            <northBoundLatitude>55.7054</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:3857" minx="-9.1e+06" miny="5.5e+06" maxx="-6e+06" maxy="7.5e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=Inon2023_EauLibre_20230418_LacSaintPierre_Sentinel1"/>
          </MetadataURL>
          <DataURL>
            <Format>text/html</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/cartographie-des-inondations-du-printemps-2023"/>
          </DataURL>
          <Style>
            <Name>default</Name>
            <Title>default</Title>
            <LegendURL width="193" height="113">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=Inon2023_EauLibre_20230418_LacSaintPierre_Sentinel1&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
        </Layer>
        <Layer queryable="1" opaque="0" cascaded="0">
          <Name>Inon2023_EauLibre_20230425_Gatineau_RCM</Name>
          <Title>2023/04/25 - Eau libre - Gatineau - RCM</Title>
          <KeywordList>
            <Keyword>inondé</Keyword>
            <Keyword>inondés</Keyword>
            <Keyword>inondée</Keyword>
            <Keyword>inondées</Keyword>
            <Keyword>inondation</Keyword>
            <Keyword>inondations</Keyword>
          </KeywordList>
          <CRS>EPSG:3857</CRS>
          <CRS>EPSG:2036</CRS>
          <CRS>EPSG:2037</CRS>
          <CRS>EPSG:2148</CRS>
          <CRS>EPSG:2149</CRS>
          <CRS>EPSG:2150</CRS>
          <CRS>EPSG:3797</CRS>
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
            <westBoundLongitude>-81.7467</westBoundLongitude>
            <eastBoundLongitude>-53.8989</eastBoundLongitude>
            <southBoundLatitude>44.2229</southBoundLatitude>
            <northBoundLatitude>55.7054</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:3857" minx="-9.1e+06" miny="5.5e+06" maxx="-6e+06" maxy="7.5e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=Inon2023_EauLibre_20230425_Gatineau_RCM"/>
          </MetadataURL>
          <DataURL>
            <Format>text/html</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/cartographie-des-inondations-du-printemps-2023"/>
          </DataURL>
          <Style>
            <Name>default</Name>
            <Title>default</Title>
            <LegendURL width="193" height="113">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=Inon2023_EauLibre_20230425_Gatineau_RCM&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
        </Layer>
        <Layer queryable="0" opaque="0" cascaded="0">
          <Name>20230508_infrarouge_Gatineau_Sentinel2</Name>
          <Title>2023/05/08 - Infrarouge - Gatineau - Sentinel2</Title>
          <KeywordList>
            <Keyword>sentinel</Keyword>
            <Keyword>radar</Keyword>
            <Keyword>carte</Keyword>
            <Keyword>inondation</Keyword>
            <Keyword>2023</Keyword>
          </KeywordList>
          <CRS>EPSG:32198</CRS>
          <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:32198" minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=20230508_infrarouge_Gatineau_Sentinel2"/>
          </MetadataURL>
          <DataURL>
            <Format>text/html</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/dataset/cartographie-des-inondations-du-printemps-2023"/>
          </DataURL>
          <Style>
            <Name>default</Name>
            <Title>default</Title>
            <LegendURL width="150" height="32">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=20230508_infrarouge_Gatineau_Sentinel2&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
        </Layer>
        <Layer queryable="1" opaque="0" cascaded="0">
          <Name>Inon2023_EauLibre_20230503_Gatineau_RCM</Name>
          <Title>2023/05/03 - Eau libre - Gatineau - RCM</Title>
          <KeywordList>
            <Keyword>inondé</Keyword>
            <Keyword>inondés</Keyword>
            <Keyword>inondée</Keyword>
            <Keyword>inondées</Keyword>
            <Keyword>inondation</Keyword>
            <Keyword>inondations</Keyword>
          </KeywordList>
          <CRS>EPSG:3857</CRS>
          <CRS>EPSG:2036</CRS>
          <CRS>EPSG:2037</CRS>
          <CRS>EPSG:2148</CRS>
          <CRS>EPSG:2149</CRS>
          <CRS>EPSG:2150</CRS>
          <CRS>EPSG:3797</CRS>
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
            <westBoundLongitude>-81.7467</westBoundLongitude>
            <eastBoundLongitude>-53.8989</eastBoundLongitude>
            <southBoundLatitude>44.2229</southBoundLatitude>
            <northBoundLatitude>55.7054</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:3857" minx="-9.1e+06" miny="5.5e+06" maxx="-6e+06" maxy="7.5e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=Inon2023_EauLibre_20230503_Gatineau_RCM"/>
          </MetadataURL>
          <DataURL>
            <Format>text/html</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/cartographie-des-inondations-du-printemps-2023"/>
          </DataURL>
          <Style>
            <Name>default</Name>
            <Title>default</Title>
            <LegendURL width="193" height="113">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=Inon2023_EauLibre_20230503_Gatineau_RCM&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
        </Layer>
        <Layer queryable="0" opaque="0" cascaded="0">
          <Name>20230415_infrarouge_LacSaintPierre_Sentinel2</Name>
          <Title>2023/04/15 - Infrarouge - Lac Saint-Pierre - Sentinel2</Title>
          <KeywordList>
            <Keyword>sentinel</Keyword>
            <Keyword>radar</Keyword>
            <Keyword>carte</Keyword>
            <Keyword>inondation</Keyword>
            <Keyword>2023</Keyword>
          </KeywordList>
          <CRS>EPSG:32198</CRS>
          <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:32198" minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=20230415_infrarouge_LacSaintPierre_Sentinel2"/>
          </MetadataURL>
          <DataURL>
            <Format>text/html</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/dataset/cartographie-des-inondations-du-printemps-2023"/>
          </DataURL>
          <Style>
            <Name>default</Name>
            <Title>default</Title>
            <LegendURL width="160" height="32">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=20230415_infrarouge_LacSaintPierre_Sentinel2&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
        </Layer>
        <Layer queryable="1" opaque="0" cascaded="0">
          <Name>Inon2023_EauLibre_20230421_Gatineau_RCM</Name>
          <Title>2023/04/21 - Eau libre - Gatineau - RCM</Title>
          <KeywordList>
            <Keyword>inondé</Keyword>
            <Keyword>inondés</Keyword>
            <Keyword>inondée</Keyword>
            <Keyword>inondées</Keyword>
            <Keyword>inondation</Keyword>
            <Keyword>inondations</Keyword>
          </KeywordList>
          <CRS>EPSG:3857</CRS>
          <CRS>EPSG:2036</CRS>
          <CRS>EPSG:2037</CRS>
          <CRS>EPSG:2148</CRS>
          <CRS>EPSG:2149</CRS>
          <CRS>EPSG:2150</CRS>
          <CRS>EPSG:3797</CRS>
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
            <westBoundLongitude>-81.7467</westBoundLongitude>
            <eastBoundLongitude>-53.8989</eastBoundLongitude>
            <southBoundLatitude>44.2229</southBoundLatitude>
            <northBoundLatitude>55.7054</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:3857" minx="-9.1e+06" miny="5.5e+06" maxx="-6e+06" maxy="7.5e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=Inon2023_EauLibre_20230421_Gatineau_RCM"/>
          </MetadataURL>
          <DataURL>
            <Format>text/html</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/cartographie-des-inondations-du-printemps-2023"/>
          </DataURL>
          <Style>
            <Name>default</Name>
            <Title>default</Title>
            <LegendURL width="193" height="113">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=Inon2023_EauLibre_20230421_Gatineau_RCM&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
        </Layer>
        <Layer queryable="1" opaque="0" cascaded="0">
          <Name>Inon2023_EauLibre_20230508_Gatineau_RCM</Name>
          <Title>2023/05/08 - Eau libre - Gatineau - RCM</Title>
          <KeywordList>
            <Keyword>inondé</Keyword>
            <Keyword>inondés</Keyword>
            <Keyword>inondée</Keyword>
            <Keyword>inondées</Keyword>
            <Keyword>inondation</Keyword>
            <Keyword>inondations</Keyword>
          </KeywordList>
          <CRS>EPSG:3857</CRS>
          <CRS>EPSG:2036</CRS>
          <CRS>EPSG:2037</CRS>
          <CRS>EPSG:2148</CRS>
          <CRS>EPSG:2149</CRS>
          <CRS>EPSG:2150</CRS>
          <CRS>EPSG:3797</CRS>
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
            <westBoundLongitude>-81.7467</westBoundLongitude>
            <eastBoundLongitude>-53.8989</eastBoundLongitude>
            <southBoundLatitude>44.2229</southBoundLatitude>
            <northBoundLatitude>55.7054</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:3857" minx="-9.1e+06" miny="5.5e+06" maxx="-6e+06" maxy="7.5e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=Inon2023_EauLibre_20230508_Gatineau_RCM"/>
          </MetadataURL>
          <DataURL>
            <Format>text/html</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/cartographie-des-inondations-du-printemps-2023"/>
          </DataURL>
          <Style>
            <Name>default</Name>
            <Title>default</Title>
            <LegendURL width="193" height="113">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=Inon2023_EauLibre_20230508_Gatineau_RCM&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
        </Layer>
        <Layer queryable="1" opaque="0" cascaded="0">
          <Name>Inon2023_EauLibre_20230423_Outaouais_RCM</Name>
          <Title>2023/04/23 - Eau libre - Rivière des Outaouais - RCM</Title>
          <KeywordList>
            <Keyword>inondé</Keyword>
            <Keyword>inondés</Keyword>
            <Keyword>inondée</Keyword>
            <Keyword>inondées</Keyword>
            <Keyword>inondation</Keyword>
            <Keyword>inondations</Keyword>
          </KeywordList>
          <CRS>EPSG:3857</CRS>
          <CRS>EPSG:2036</CRS>
          <CRS>EPSG:2037</CRS>
          <CRS>EPSG:2148</CRS>
          <CRS>EPSG:2149</CRS>
          <CRS>EPSG:2150</CRS>
          <CRS>EPSG:3797</CRS>
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
            <westBoundLongitude>-81.7467</westBoundLongitude>
            <eastBoundLongitude>-53.8989</eastBoundLongitude>
            <southBoundLatitude>44.2229</southBoundLatitude>
            <northBoundLatitude>55.7054</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:3857" minx="-9.1e+06" miny="5.5e+06" maxx="-6e+06" maxy="7.5e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=Inon2023_EauLibre_20230423_Outaouais_RCM"/>
          </MetadataURL>
          <DataURL>
            <Format>text/html</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/cartographie-des-inondations-du-printemps-2023"/>
          </DataURL>
          <Style>
            <Name>default</Name>
            <Title>default</Title>
            <LegendURL width="193" height="113">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=Inon2023_EauLibre_20230423_Outaouais_RCM&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
        </Layer>
        <Layer queryable="0" opaque="0" cascaded="0">
          <Name>msp_inondations2023_20230505_infrarouge_LacSaintPierre_Sentinel2</Name>
          <Title>2023/05/05 - Infrarouge - Lac Saint-Pierre - Sentinel2</Title>
          <KeywordList>
            <Keyword>sentinel</Keyword>
            <Keyword>radar</Keyword>
            <Keyword>carte</Keyword>
            <Keyword>inondation</Keyword>
            <Keyword>2023</Keyword>
          </KeywordList>
          <CRS>EPSG:32198</CRS>
          <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:32198" minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=msp_inondations2023_20230505_infrarouge_LacSaintPierre_Sentinel2"/>
          </MetadataURL>
          <DataURL>
            <Format>text/html</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/dataset/cartographie-des-inondations-du-printemps-2023"/>
          </DataURL>
          <Style>
            <Name>default</Name>
            <Title>default</Title>
            <LegendURL width="150" height="32">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=msp_inondations2023_20230505_infrarouge_LacSaintPierre_Sentinel2&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
        </Layer>
        <Layer queryable="1" opaque="0" cascaded="0">
          <Name>Inon2023_EauLibre_20230427_Outaouais_RCM</Name>
          <Title>2023/04/27 - Eau libre - Rivière des Outaouais - RCM</Title>
          <KeywordList>
            <Keyword>inondé</Keyword>
            <Keyword>inondés</Keyword>
            <Keyword>inondée</Keyword>
            <Keyword>inondées</Keyword>
            <Keyword>inondation</Keyword>
            <Keyword>inondations</Keyword>
          </KeywordList>
          <CRS>EPSG:3857</CRS>
          <CRS>EPSG:2036</CRS>
          <CRS>EPSG:2037</CRS>
          <CRS>EPSG:2148</CRS>
          <CRS>EPSG:2149</CRS>
          <CRS>EPSG:2150</CRS>
          <CRS>EPSG:3797</CRS>
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
            <westBoundLongitude>-81.7467</westBoundLongitude>
            <eastBoundLongitude>-53.8989</eastBoundLongitude>
            <southBoundLatitude>44.2229</southBoundLatitude>
            <northBoundLatitude>55.7054</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:3857" minx="-9.1e+06" miny="5.5e+06" maxx="-6e+06" maxy="7.5e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=Inon2023_EauLibre_20230427_Outaouais_RCM"/>
          </MetadataURL>
          <DataURL>
            <Format>text/html</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/cartographie-des-inondations-du-printemps-2023"/>
          </DataURL>
          <Style>
            <Name>default</Name>
            <Title>default</Title>
            <LegendURL width="193" height="113">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=Inon2023_EauLibre_20230427_Outaouais_RCM&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
        </Layer>
        <Layer queryable="1" opaque="0" cascaded="0">
          <Name>Inon2023_EauLibre_20230505_Montreal_RCM</Name>
          <Title>2023/05/05 - Eau libre - Montréal - RCM</Title>
          <KeywordList>
            <Keyword>inondé</Keyword>
            <Keyword>inondés</Keyword>
            <Keyword>inondée</Keyword>
            <Keyword>inondées</Keyword>
            <Keyword>inondation</Keyword>
            <Keyword>inondations</Keyword>
          </KeywordList>
          <CRS>EPSG:3857</CRS>
          <CRS>EPSG:2036</CRS>
          <CRS>EPSG:2037</CRS>
          <CRS>EPSG:2148</CRS>
          <CRS>EPSG:2149</CRS>
          <CRS>EPSG:2150</CRS>
          <CRS>EPSG:3797</CRS>
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
            <westBoundLongitude>-81.7467</westBoundLongitude>
            <eastBoundLongitude>-53.8989</eastBoundLongitude>
            <southBoundLatitude>44.2229</southBoundLatitude>
            <northBoundLatitude>55.7054</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:3857" minx="-9.1e+06" miny="5.5e+06" maxx="-6e+06" maxy="7.5e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=Inon2023_EauLibre_20230505_Montreal_RCM"/>
          </MetadataURL>
          <DataURL>
            <Format>text/html</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/cartographie-des-inondations-du-printemps-2023"/>
          </DataURL>
          <Style>
            <Name>default</Name>
            <Title>default</Title>
            <LegendURL width="193" height="113">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=Inon2023_EauLibre_20230505_Montreal_RCM&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
        </Layer>
        <Layer queryable="1" opaque="0" cascaded="0">
          <Name>Inon2023_EauLibre_20230504_Gatineau_Capella</Name>
          <Title>2023/05/04 - Eau libre - Gatineau - Capella</Title>
          <KeywordList>
            <Keyword>inondé</Keyword>
            <Keyword>inondés</Keyword>
            <Keyword>inondée</Keyword>
            <Keyword>inondées</Keyword>
            <Keyword>inondation</Keyword>
            <Keyword>inondations</Keyword>
          </KeywordList>
          <CRS>EPSG:3857</CRS>
          <CRS>EPSG:2036</CRS>
          <CRS>EPSG:2037</CRS>
          <CRS>EPSG:2148</CRS>
          <CRS>EPSG:2149</CRS>
          <CRS>EPSG:2150</CRS>
          <CRS>EPSG:3797</CRS>
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
            <westBoundLongitude>-81.7467</westBoundLongitude>
            <eastBoundLongitude>-53.8989</eastBoundLongitude>
            <southBoundLatitude>44.2229</southBoundLatitude>
            <northBoundLatitude>55.7054</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:3857" minx="-9.1e+06" miny="5.5e+06" maxx="-6e+06" maxy="7.5e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=Inon2023_EauLibre_20230504_Gatineau_Capella"/>
          </MetadataURL>
          <DataURL>
            <Format>text/html</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/cartographie-des-inondations-du-printemps-2023"/>
          </DataURL>
          <Style>
            <Name>default</Name>
            <Title>default</Title>
            <LegendURL width="193" height="113">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=Inon2023_EauLibre_20230504_Gatineau_Capella&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
        </Layer>
        <Layer queryable="1" opaque="0" cascaded="0">
          <Name>Inon2023_EauLibre_20230502_Outaouais_RCM</Name>
          <Title>2023/05/02 - Eau libre - Rivière des Outaouais - RCM</Title>
          <KeywordList>
            <Keyword>inondé</Keyword>
            <Keyword>inondés</Keyword>
            <Keyword>inondée</Keyword>
            <Keyword>inondées</Keyword>
            <Keyword>inondation</Keyword>
            <Keyword>inondations</Keyword>
          </KeywordList>
          <CRS>EPSG:3857</CRS>
          <CRS>EPSG:2036</CRS>
          <CRS>EPSG:2037</CRS>
          <CRS>EPSG:2148</CRS>
          <CRS>EPSG:2149</CRS>
          <CRS>EPSG:2150</CRS>
          <CRS>EPSG:3797</CRS>
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
            <westBoundLongitude>-81.7467</westBoundLongitude>
            <eastBoundLongitude>-53.8989</eastBoundLongitude>
            <southBoundLatitude>44.2229</southBoundLatitude>
            <northBoundLatitude>55.7054</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:3857" minx="-9.1e+06" miny="5.5e+06" maxx="-6e+06" maxy="7.5e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=Inon2023_EauLibre_20230502_Outaouais_RCM"/>
          </MetadataURL>
          <DataURL>
            <Format>text/html</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/cartographie-des-inondations-du-printemps-2023"/>
          </DataURL>
          <Style>
            <Name>default</Name>
            <Title>default</Title>
            <LegendURL width="193" height="113">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=Inon2023_EauLibre_20230502_Outaouais_RCM&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
        </Layer>
        <Layer queryable="1" opaque="0" cascaded="0">
          <Name>Inon2023_EauLibre_20230504_Outaouais_RCM</Name>
          <Title>2023/05/04 - Eau libre - Rivière des Outaouais - RCM</Title>
          <KeywordList>
            <Keyword>inondé</Keyword>
            <Keyword>inondés</Keyword>
            <Keyword>inondée</Keyword>
            <Keyword>inondées</Keyword>
            <Keyword>inondation</Keyword>
            <Keyword>inondations</Keyword>
          </KeywordList>
          <CRS>EPSG:3857</CRS>
          <CRS>EPSG:2036</CRS>
          <CRS>EPSG:2037</CRS>
          <CRS>EPSG:2148</CRS>
          <CRS>EPSG:2149</CRS>
          <CRS>EPSG:2150</CRS>
          <CRS>EPSG:3797</CRS>
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
            <westBoundLongitude>-81.7467</westBoundLongitude>
            <eastBoundLongitude>-53.8989</eastBoundLongitude>
            <southBoundLatitude>44.2229</southBoundLatitude>
            <northBoundLatitude>55.7054</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:3857" minx="-9.1e+06" miny="5.5e+06" maxx="-6e+06" maxy="7.5e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=Inon2023_EauLibre_20230504_Outaouais_RCM"/>
          </MetadataURL>
          <DataURL>
            <Format>text/html</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/cartographie-des-inondations-du-printemps-2023"/>
          </DataURL>
          <Style>
            <Name>default</Name>
            <Title>default</Title>
            <LegendURL width="193" height="113">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=Inon2023_EauLibre_20230504_Outaouais_RCM&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
        </Layer>
        <Layer queryable="1" opaque="0" cascaded="0">
          <Name>Inon2023_EauLibre_20230423_Montreal_Sentinel1</Name>
          <Title>2023/04/23 - Eau libre - Montréal - Sentinel 1</Title>
          <KeywordList>
            <Keyword>inondé</Keyword>
            <Keyword>inondés</Keyword>
            <Keyword>inondée</Keyword>
            <Keyword>inondées</Keyword>
            <Keyword>inondation</Keyword>
            <Keyword>inondations</Keyword>
          </KeywordList>
          <CRS>EPSG:3857</CRS>
          <CRS>EPSG:2036</CRS>
          <CRS>EPSG:2037</CRS>
          <CRS>EPSG:2148</CRS>
          <CRS>EPSG:2149</CRS>
          <CRS>EPSG:2150</CRS>
          <CRS>EPSG:3797</CRS>
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
            <westBoundLongitude>-81.7467</westBoundLongitude>
            <eastBoundLongitude>-53.8989</eastBoundLongitude>
            <southBoundLatitude>44.2229</southBoundLatitude>
            <northBoundLatitude>55.7054</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:3857" minx="-9.1e+06" miny="5.5e+06" maxx="-6e+06" maxy="7.5e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=Inon2023_EauLibre_20230423_Montreal_Sentinel1"/>
          </MetadataURL>
          <DataURL>
            <Format>text/html</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/cartographie-des-inondations-du-printemps-2023"/>
          </DataURL>
          <Style>
            <Name>default</Name>
            <Title>default</Title>
            <LegendURL width="193" height="113">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=Inon2023_EauLibre_20230423_Montreal_Sentinel1&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
        </Layer>
        <Layer queryable="1" opaque="0" cascaded="0">
          <Name>Inon2023_EauLibre_20230507_HautOutaouais_RCM</Name>
          <Title>2023/05/07 - Eau libre - Outaouais supérieur - RCM</Title>
          <KeywordList>
            <Keyword>inondé</Keyword>
            <Keyword>inondés</Keyword>
            <Keyword>inondée</Keyword>
            <Keyword>inondées</Keyword>
            <Keyword>inondation</Keyword>
            <Keyword>inondations</Keyword>
          </KeywordList>
          <CRS>EPSG:3857</CRS>
          <CRS>EPSG:2036</CRS>
          <CRS>EPSG:2037</CRS>
          <CRS>EPSG:2148</CRS>
          <CRS>EPSG:2149</CRS>
          <CRS>EPSG:2150</CRS>
          <CRS>EPSG:3797</CRS>
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
            <westBoundLongitude>-81.7467</westBoundLongitude>
            <eastBoundLongitude>-53.8989</eastBoundLongitude>
            <southBoundLatitude>44.2229</southBoundLatitude>
            <northBoundLatitude>55.7054</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:3857" minx="-9.1e+06" miny="5.5e+06" maxx="-6e+06" maxy="7.5e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=Inon2023_EauLibre_20230507_HautOutaouais_RCM"/>
          </MetadataURL>
          <DataURL>
            <Format>text/html</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/cartographie-des-inondations-du-printemps-2023"/>
          </DataURL>
          <Style>
            <Name>default</Name>
            <Title>default</Title>
            <LegendURL width="193" height="113">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=Inon2023_EauLibre_20230507_HautOutaouais_RCM&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
        </Layer>
        <Layer queryable="1" opaque="0" cascaded="0">
          <Name>vg_observation_v_mouv_terr_16avril2023_wmst</Name>
          <Title>Événements de mouvement de terrain depuis le 14 avril 2023</Title>
          <KeywordList>
            <Keyword>historique</Keyword>
            <Keyword>événements</Keyword>
            <Keyword>inondations</Keyword>
            <Keyword>observations</Keyword>
          </KeywordList>
          <CRS>EPSG:32198</CRS>
          <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:32198" minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06"/>
          <Dimension name="time" units="ISO8601" nearestValue="0">2023-04-14T04:00:00Z/2023-05-13T04:00:00Z</Dimension>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=vg_observation_v_mouv_terr_16avril2023_wmst"/>
          </MetadataURL>
          <DataURL>
            <Format>text/html</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/dataset/cartographie-des-inondations-du-printemps-2023"/>
          </DataURL>
          <Style>
            <Name>default</Name>
            <Title>default</Title>
            <LegendURL width="163" height="32">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=vg_observation_v_mouv_terr_16avril2023_wmst&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
        </Layer>
        <Layer queryable="1" opaque="0" cascaded="0">
          <Name>Inon2023_EauLibre_20230501_Gatineau_RCM</Name>
          <Title>2023/05/01 - Eau libre - Gatineau - RCM</Title>
          <KeywordList>
            <Keyword>inondé</Keyword>
            <Keyword>inondés</Keyword>
            <Keyword>inondée</Keyword>
            <Keyword>inondées</Keyword>
            <Keyword>inondation</Keyword>
            <Keyword>inondations</Keyword>
          </KeywordList>
          <CRS>EPSG:3857</CRS>
          <CRS>EPSG:2036</CRS>
          <CRS>EPSG:2037</CRS>
          <CRS>EPSG:2148</CRS>
          <CRS>EPSG:2149</CRS>
          <CRS>EPSG:2150</CRS>
          <CRS>EPSG:3797</CRS>
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
            <westBoundLongitude>-81.7467</westBoundLongitude>
            <eastBoundLongitude>-53.8989</eastBoundLongitude>
            <southBoundLatitude>44.2229</southBoundLatitude>
            <northBoundLatitude>55.7054</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:3857" minx="-9.1e+06" miny="5.5e+06" maxx="-6e+06" maxy="7.5e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=Inon2023_EauLibre_20230501_Gatineau_RCM"/>
          </MetadataURL>
          <DataURL>
            <Format>text/html</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/cartographie-des-inondations-du-printemps-2023"/>
          </DataURL>
          <Style>
            <Name>default</Name>
            <Title>default</Title>
            <LegendURL width="193" height="113">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=Inon2023_EauLibre_20230501_Gatineau_RCM&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
        </Layer>
      </Layer>
      <Layer queryable="1">
        <Name>Delaisses_crue</Name>
        <Title>Délaissés de crue</Title>
        <Abstract>Delaisses_crue</Abstract>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="217" height="113">
            <Format>image/png</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=Delaisses_crue&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
        <Layer queryable="1" opaque="0" cascaded="0">
          <Name>msp_delaiss_crue_public_p</Name>
          <Title>Délaissés de crue arpentés (Public)</Title>
          <KeywordList>
            <Keyword>decrue</Keyword>
            <Keyword>niveau</Keyword>
            <Keyword>eau</Keyword>
            <Keyword>maximum</Keyword>
            <Keyword>inondation</Keyword>
          </KeywordList>
          <CRS>EPSG:32198</CRS>
          <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:32198" minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=msp_delaiss_crue_public_p"/>
          </MetadataURL>
          <DataURL>
            <Format>igo</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/metadata/delaisses-de-crue-arpentes-msp"/>
          </DataURL>
          <Style>
            <Name>default</Name>
            <Title>default</Title>
            <LegendURL width="217" height="59">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=msp_delaiss_crue_public_p&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
        </Layer>
      </Layer>
      <Layer queryable="1">
        <Name>debby2024</Name>
        <Title>Tempête Debby 2024</Title>
        <Abstract>debby2024</Abstract>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="251" height="761">
            <Format>image/png</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=debby2024&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
        <Layer queryable="1" opaque="0" cascaded="0">
          <Name>risc_evenement_igo_public_debby2024</Name>
          <Title>Événements de sécurité civile (Debby)</Title>
          <Abstract>Événements de sécurité civile liés à la tempête  tropicale Debby 2024 (source MSP)</Abstract>
          <KeywordList>
            <Keyword>debby</Keyword>
            <Keyword>ouragan</Keyword>
            <Keyword>tempete</Keyword>
          </KeywordList>
          <CRS>EPSG:32198</CRS>
          <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:32198" minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=risc_evenement_igo_public_debby2024"/>
          </MetadataURL>
          <DataURL>
            <Format>text/html</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/dataset/consequences-de-la-tempete-post-tropicale-debby-2024"/>
          </DataURL>
          <Style>
            <Name>default</Name>
            <Title>default</Title>
            <LegendURL width="251" height="599">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=risc_evenement_igo_public_debby2024&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
        </Layer>
        <Layer queryable="1" opaque="0" cascaded="0">
          <Name>vg_observation_debby_2024_muns_touchees_public</Name>
          <Title>Municipalités touchées (Debby)</Title>
          <Abstract>Municipalitées  touchées par des événements de sécurité civile liés à la tempête tropicale Debby 2024</Abstract>
          <KeywordList>
            <Keyword>debby</Keyword>
            <Keyword>ouragan</Keyword>
            <Keyword>tempete</Keyword>
          </KeywordList>
          <CRS>EPSG:32198</CRS>
          <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:32198" minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=vg_observation_debby_2024_muns_touchees_public"/>
          </MetadataURL>
          <DataURL>
            <Format>text/html</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/dataset/consequences-de-la-tempete-post-tropicale-debby-2024"/>
          </DataURL>
          <Style>
            <Name>default</Name>
            <Title>default</Title>
            <LegendURL width="106" height="32">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=vg_observation_debby_2024_muns_touchees_public&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
        </Layer>
      </Layer>
      <Layer queryable="1">
        <Name>COVID_19</Name>
        <Title>COVID-19</Title>
        <Abstract>COVID_19</Abstract>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="37" height="5">
            <Format>image/png</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=COVID_19&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
        <Layer queryable="1" opaque="0" cascaded="1">
          <Name>WMS_PALIERS_ALERTE_COVID19</Name>
          <Title>Paliers d'alerte - COVID19</Title>
          <KeywordList>
            <Keyword>alerte</Keyword>
            <Keyword>covid</Keyword>
            <Keyword>coronavirus</Keyword>
            <Keyword>confinement</Keyword>
            <Keyword>palier</Keyword>
            <Keyword>pandémie</Keyword>
          </KeywordList>
          <CRS>EPSG:32198</CRS>
          <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:32198" minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=WMS_PALIERS_ALERTE_COVID19"/>
          </MetadataURL>
          <DataURL>
            <Format>text/html</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/metadata/e72f1556-869b-40af-8cd9-f0b8cbdc1338"/>
          </DataURL>
        </Layer>
      </Layer>
      <Layer queryable="1">
        <Name>Inondations_2020</Name>
        <Title>Inondations 2020</Title>
        <Abstract>Inondations_2020</Abstract>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="339" height="518">
            <Format>image/png</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=Inondations_2020&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
        <Layer queryable="0" opaque="0" cascaded="0">
          <Name>20200408_inondations_lacstpierre_sentinel2</Name>
          <Title>2020/04/08 - Infrarouge - Lac Saint-Pierre - Sentinel2</Title>
          <KeywordList>
            <Keyword>sentinel</Keyword>
            <Keyword>radar</Keyword>
            <Keyword>carte</Keyword>
            <Keyword>inondation</Keyword>
            <Keyword>2020</Keyword>
          </KeywordList>
          <CRS>EPSG:32198</CRS>
          <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:32198" minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=20200408_inondations_lacstpierre_sentinel2"/>
          </MetadataURL>
          <DataURL>
            <Format>text/html</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/cartographie-des-inondations-du-printemps-2020"/>
          </DataURL>
          <Style>
            <Name>default</Name>
            <Title>default</Title>
            <LegendURL width="153" height="32">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=20200408_inondations_lacstpierre_sentinel2&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
        </Layer>
        <Layer queryable="0" opaque="0" cascaded="0">
          <Name>20200404_glace_chaudiere_Sentinel1</Name>
          <Title>2020/04/04 - Glace et zones possiblement inondées - Chaudière - Sentinel1</Title>
          <KeywordList>
            <Keyword>sentinel</Keyword>
            <Keyword>radar</Keyword>
            <Keyword>carte</Keyword>
            <Keyword>glace</Keyword>
            <Keyword>2020</Keyword>
          </KeywordList>
          <CRS>EPSG:32198</CRS>
          <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:32198" minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=20200404_glace_chaudiere_Sentinel1"/>
          </MetadataURL>
          <DataURL>
            <Format>text/html</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/cartographie-des-inondations-du-printemps-2020"/>
          </DataURL>
          <Style>
            <Name>default</Name>
            <Title>default</Title>
            <LegendURL width="339" height="194">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=20200404_glace_chaudiere_Sentinel1&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
        </Layer>
        <Layer queryable="1" opaque="0" cascaded="0">
          <Name>Inon2020_EauLibre_20200420154911_LacSaintPierre_Sentinel1</Name>
          <Title>2020/04/20 - Eau libre - Lac Saint-Pierre - Sentinel 1</Title>
          <KeywordList>
            <Keyword>inondé</Keyword>
            <Keyword>inondés</Keyword>
            <Keyword>inondée</Keyword>
            <Keyword>inondées</Keyword>
            <Keyword>inondation</Keyword>
            <Keyword>inondations</Keyword>
            <Keyword>Lac Saint-Pierre</Keyword>
          </KeywordList>
          <CRS>EPSG:3857</CRS>
          <CRS>EPSG:2036</CRS>
          <CRS>EPSG:2037</CRS>
          <CRS>EPSG:2148</CRS>
          <CRS>EPSG:2149</CRS>
          <CRS>EPSG:2150</CRS>
          <CRS>EPSG:3797</CRS>
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
            <westBoundLongitude>-81.7467</westBoundLongitude>
            <eastBoundLongitude>-53.8989</eastBoundLongitude>
            <southBoundLatitude>44.2229</southBoundLatitude>
            <northBoundLatitude>55.7054</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:3857" minx="-9.1e+06" miny="5.5e+06" maxx="-6e+06" maxy="7.5e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=Inon2020_EauLibre_20200420154911_LacSaintPierre_Sentinel1"/>
          </MetadataURL>
          <DataURL>
            <Format>text/html</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/cartographie-des-inondations-du-printemps-2020"/>
          </DataURL>
          <Style>
            <Name>default</Name>
            <Title>default</Title>
            <LegendURL width="193" height="113">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=Inon2020_EauLibre_20200420154911_LacSaintPierre_Sentinel1&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
          <MinScaleDenominator>1</MinScaleDenominator>
          <MaxScaleDenominator>1e+07</MaxScaleDenominator>
        </Layer>
        <Layer queryable="0" opaque="0" cascaded="0">
          <Name>20200420154911UTC_inondations_grandmontreal_sentinel2</Name>
          <Title>2020/04/20 - Infrarouge - Grand Montréal - Sentinel2</Title>
          <KeywordList>
            <Keyword>sentinel</Keyword>
            <Keyword>radar</Keyword>
            <Keyword>carte</Keyword>
            <Keyword>inondation</Keyword>
            <Keyword>2020</Keyword>
          </KeywordList>
          <CRS>EPSG:32198</CRS>
          <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:32198" minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=20200420154911UTC_inondations_grandmontreal_sentinel2"/>
          </MetadataURL>
          <DataURL>
            <Format>text/html</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/cartographie-des-inondations-du-printemps-2020"/>
          </DataURL>
          <Style>
            <Name>default</Name>
            <Title>default</Title>
            <LegendURL width="160" height="32">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=20200420154911UTC_inondations_grandmontreal_sentinel2&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
        </Layer>
        <Layer queryable="1" opaque="0" cascaded="0">
          <Name>Inon2020_EauLibre_20200408_LacSaintPierre_Sentinel1</Name>
          <Title>2020/04/08 - Eau libre - Lac Saint-Pierre - Sentinel1</Title>
          <KeywordList>
            <Keyword>inondé</Keyword>
            <Keyword>inondés</Keyword>
            <Keyword>inondée</Keyword>
            <Keyword>inondées</Keyword>
            <Keyword>inondation</Keyword>
            <Keyword>inondations</Keyword>
          </KeywordList>
          <CRS>EPSG:3857</CRS>
          <CRS>EPSG:2036</CRS>
          <CRS>EPSG:2037</CRS>
          <CRS>EPSG:2148</CRS>
          <CRS>EPSG:2149</CRS>
          <CRS>EPSG:2150</CRS>
          <CRS>EPSG:3797</CRS>
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
            <westBoundLongitude>-81.7467</westBoundLongitude>
            <eastBoundLongitude>-53.8989</eastBoundLongitude>
            <southBoundLatitude>44.2229</southBoundLatitude>
            <northBoundLatitude>55.7054</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:3857" minx="-9.1e+06" miny="5.5e+06" maxx="-6e+06" maxy="7.5e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=Inon2020_EauLibre_20200408_LacSaintPierre_Sentinel1"/>
          </MetadataURL>
          <DataURL>
            <Format>text/html</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/cartographie-des-inondations-du-printemps-2020"/>
          </DataURL>
          <Style>
            <Name>default</Name>
            <Title>default</Title>
            <LegendURL width="193" height="113">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=Inon2020_EauLibre_20200408_LacSaintPierre_Sentinel1&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
          <MinScaleDenominator>1</MinScaleDenominator>
          <MaxScaleDenominator>1e+07</MaxScaleDenominator>
        </Layer>
        <Layer queryable="1" opaque="0" cascaded="0">
          <Name>vg_observation_inondation_2avril2020_mun_tout_v</Name>
          <Title>Municipalités touchées depuis le 2 avril 2020</Title>
          <KeywordList>
            <Keyword>historique</Keyword>
            <Keyword>événements</Keyword>
            <Keyword>inondations</Keyword>
          </KeywordList>
          <CRS>EPSG:32198</CRS>
          <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:32198" minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06"/>
          <Dimension name="time" units="ISO8601" nearestValue="0">2020-04-02T04:00:00Z/2020-07-01T04:00:00Z</Dimension>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=vg_observation_inondation_2avril2020_mun_tout_v"/>
          </MetadataURL>
          <DataURL>
            <Format>text/html</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/cartographie-des-inondations-du-printemps-2020"/>
          </DataURL>
          <Style>
            <Name>default</Name>
            <Title>default</Title>
            <LegendURL width="106" height="32">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=vg_observation_inondation_2avril2020_mun_tout_v&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
          <MinScaleDenominator>10000</MinScaleDenominator>
        </Layer>
        <Layer queryable="1" opaque="0" cascaded="0">
          <Name>vg_observation_v_inondation_2avril2020_wmst</Name>
          <Title>Événements d'inondation depuis le 2 avril 2020</Title>
          <KeywordList>
            <Keyword>historique</Keyword>
            <Keyword>événements</Keyword>
            <Keyword>inondations</Keyword>
            <Keyword>observations</Keyword>
          </KeywordList>
          <CRS>EPSG:32198</CRS>
          <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:32198" minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06"/>
          <Dimension name="time" units="ISO8601" nearestValue="0">2020-04-02T04:00:00Z/2020-07-01T04:00:00Z</Dimension>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=vg_observation_v_inondation_2avril2020_wmst"/>
          </MetadataURL>
          <DataURL>
            <Format>text/html</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/fr/dataset/cartographie-des-inondations-du-printemps-2020"/>
          </DataURL>
          <Style>
            <Name>default</Name>
            <Title>default</Title>
            <LegendURL width="98" height="32">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=vg_observation_v_inondation_2avril2020_wmst&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
        </Layer>
      </Layer>
      <Layer queryable="1">
        <Name>Observations_terrains_OSCQ</Name>
        <Title>Observations terrains (OSCQ)</Title>
        <Abstract>Observations_terrains_OSCQ</Abstract>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="255" height="1841">
            <Format>image/png</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=Observations_terrains_OSCQ&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
        <Layer queryable="1" opaque="0" cascaded="0">
          <Name>vg_observation_v_inondation_embacle_wmst</Name>
          <Title>Historiques des embâcles répertoriés au MSP</Title>
          <KeywordList>
            <Keyword>embâcle</Keyword>
            <Keyword>embacle</Keyword>
            <Keyword>embacles</Keyword>
            <Keyword>glace</Keyword>
            <Keyword>glaces</Keyword>
            <Keyword>rivière</Keyword>
            <Keyword>rivières</Keyword>
            <Keyword>observation</Keyword>
          </KeywordList>
          <CRS>EPSG:32198</CRS>
          <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:32198" minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06"/>
          <Dimension name="time" units="ISO8601" nearestValue="0">1980-01-01T05:00:00Z/2025-07-31T05:00:00Z</Dimension>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=vg_observation_v_inondation_embacle_wmst"/>
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
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=vg_observation_v_inondation_embacle_wmst&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
        </Layer>
        <Layer queryable="1" opaque="0" cascaded="0">
          <Name>vg_observation_v_autre_wmst</Name>
          <Title>Historique des événements de sécurité civile (Archives) (publique)</Title>
          <CRS>EPSG:32198</CRS>
          <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:32198" minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=vg_observation_v_autre_wmst"/>
          </MetadataURL>
          <DataURL>
            <Format>igo</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://www.donneesquebec.ca/recherche/dataset/observations-terrain-historiques-devenements-archives"/>
          </DataURL>
          <Style>
            <Name>default</Name>
            <Title>default</Title>
            <LegendURL width="223" height="599">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=vg_observation_v_autre_wmst&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
        </Layer>
      </Layer>
      <Layer queryable="1">
        <Name>feux_2023</Name>
        <Title>Feux de forêt 2023</Title>
        <Abstract>feux_2023</Abstract>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="247" height="1112">
            <Format>image/png</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=feux_2023&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
        <Layer queryable="0" opaque="0" cascaded="0">
          <Name>20230602_visible_gouin_nord_Sentinel2</Name>
          <Title>2023/06/02 - Visible - Réservoir Gouin (nord) - Sentinel2</Title>
          <Abstract>Feux de forêt 2023</Abstract>
          <KeywordList>
            <Keyword>sentinel</Keyword>
            <Keyword>radar</Keyword>
            <Keyword>carte</Keyword>
            <Keyword>feux</Keyword>
            <Keyword>foret</Keyword>
            <Keyword>2023</Keyword>
          </KeywordList>
          <CRS>EPSG:32198</CRS>
          <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:32198" minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=20230602_visible_gouin_nord_Sentinel2"/>
          </MetadataURL>
          <Style>
            <Name>default</Name>
            <Title>default</Title>
            <LegendURL width="149" height="32">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=20230602_visible_gouin_nord_Sentinel2&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
        </Layer>
        <Layer queryable="0" opaque="0" cascaded="0">
          <Name>20230604_visible_Saguenay_ouest_Sentinel2</Name>
          <Title>2023/06/04 - Visible - Saguenay (ouest) - Sentinel2</Title>
          <Abstract>Feux de forêt 2023</Abstract>
          <KeywordList>
            <Keyword>sentinel</Keyword>
            <Keyword>radar</Keyword>
            <Keyword>carte</Keyword>
            <Keyword>feux</Keyword>
            <Keyword>foret</Keyword>
            <Keyword>2023</Keyword>
          </KeywordList>
          <CRS>EPSG:32198</CRS>
          <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:32198" minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=20230604_visible_Saguenay_ouest_Sentinel2"/>
          </MetadataURL>
          <Style>
            <Name>default</Name>
            <Title>default</Title>
            <LegendURL width="149" height="32">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=20230604_visible_Saguenay_ouest_Sentinel2&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
        </Layer>
        <Layer queryable="0" opaque="0" cascaded="0">
          <Name>20230531_visible_SeptIles_Sentinel2</Name>
          <Title>2023/05/31 - Visible - Sept-Îles - Sentinel2</Title>
          <Abstract>Feux de forêt 2023</Abstract>
          <KeywordList>
            <Keyword>sentinel</Keyword>
            <Keyword>radar</Keyword>
            <Keyword>carte</Keyword>
            <Keyword>feux</Keyword>
            <Keyword>foret</Keyword>
            <Keyword>2023</Keyword>
          </KeywordList>
          <CRS>EPSG:32198</CRS>
          <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:32198" minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=20230531_visible_SeptIles_Sentinel2"/>
          </MetadataURL>
          <Style>
            <Name>default</Name>
            <Title>default</Title>
            <LegendURL width="157" height="32">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=20230531_visible_SeptIles_Sentinel2&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
        </Layer>
        <Layer queryable="0" opaque="0" cascaded="0">
          <Name>20230604_visible_Saguenay_est_Sentinel2</Name>
          <Title>2023/06/04 - Visible - Saguenay (est) - Sentinel2</Title>
          <Abstract>Feux de forêt 2023</Abstract>
          <KeywordList>
            <Keyword>sentinel</Keyword>
            <Keyword>radar</Keyword>
            <Keyword>carte</Keyword>
            <Keyword>feux</Keyword>
            <Keyword>foret</Keyword>
            <Keyword>2023</Keyword>
          </KeywordList>
          <CRS>EPSG:32198</CRS>
          <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:32198" minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=20230604_visible_Saguenay_est_Sentinel2"/>
          </MetadataURL>
          <Style>
            <Name>default</Name>
            <Title>default</Title>
            <LegendURL width="149" height="32">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=20230604_visible_Saguenay_est_Sentinel2&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
        </Layer>
        <Layer queryable="0" opaque="0" cascaded="0">
          <Name>20230622_visible_gouin_sud_Sentinel2</Name>
          <Title>2023/06/22 - Visible - Réservoir Gouin (sud) - Sentinel2</Title>
          <Abstract>Feux de forêt 2023</Abstract>
          <KeywordList>
            <Keyword>sentinel</Keyword>
            <Keyword>radar</Keyword>
            <Keyword>carte</Keyword>
            <Keyword>feux</Keyword>
            <Keyword>foret</Keyword>
            <Keyword>2023</Keyword>
          </KeywordList>
          <CRS>EPSG:32198</CRS>
          <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:32198" minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=20230622_visible_gouin_sud_Sentinel2"/>
          </MetadataURL>
          <Style>
            <Name>default</Name>
            <Title>default</Title>
            <LegendURL width="156" height="32">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=20230622_visible_gouin_sud_Sentinel2&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
        </Layer>
        <Layer queryable="0" opaque="0" cascaded="0">
          <Name>20230605_ir_LSQ_Sentinel2</Name>
          <Title>2023/06/05 - Infrarouge - Lebel-sur-Quévillon - Sentinel2</Title>
          <Abstract>Feux de forêt 2023</Abstract>
          <KeywordList>
            <Keyword>sentinel</Keyword>
            <Keyword>radar</Keyword>
            <Keyword>carte</Keyword>
            <Keyword>feux</Keyword>
            <Keyword>foret</Keyword>
            <Keyword>2023</Keyword>
          </KeywordList>
          <CRS>EPSG:32198</CRS>
          <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:32198" minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=20230605_ir_LSQ_Sentinel2"/>
          </MetadataURL>
          <Style>
            <Name>default</Name>
            <Title>default</Title>
            <LegendURL width="149" height="32">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=20230605_ir_LSQ_Sentinel2&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
        </Layer>
        <Layer queryable="0" opaque="0" cascaded="0">
          <Name>20230622_visible_gouin_nord_Sentinel2</Name>
          <Title>2023/06/22 - Visible - Réservoir Gouin (nord) - Sentinel2</Title>
          <Abstract>Feux de forêt 2023</Abstract>
          <KeywordList>
            <Keyword>sentinel</Keyword>
            <Keyword>radar</Keyword>
            <Keyword>carte</Keyword>
            <Keyword>feux</Keyword>
            <Keyword>foret</Keyword>
            <Keyword>2023</Keyword>
          </KeywordList>
          <CRS>EPSG:32198</CRS>
          <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:32198" minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=20230622_visible_gouin_nord_Sentinel2"/>
          </MetadataURL>
          <Style>
            <Name>default</Name>
            <Title>default</Title>
            <LegendURL width="156" height="32">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=20230622_visible_gouin_nord_Sentinel2&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
        </Layer>
        <Layer queryable="0" opaque="0" cascaded="0">
          <Name>20230620_visible_LSQ_Sentinel2</Name>
          <Title>2023/06/20 - Visible - Lebel-sur-Quévillon - Sentinel2</Title>
          <Abstract>Feux de forêt 2023</Abstract>
          <KeywordList>
            <Keyword>sentinel</Keyword>
            <Keyword>radar</Keyword>
            <Keyword>carte</Keyword>
            <Keyword>feux</Keyword>
            <Keyword>foret</Keyword>
            <Keyword>2023</Keyword>
          </KeywordList>
          <CRS>EPSG:32198</CRS>
          <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:32198" minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=20230620_visible_LSQ_Sentinel2"/>
          </MetadataURL>
          <Style>
            <Name>default</Name>
            <Title>default</Title>
            <LegendURL width="156" height="32">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=20230620_visible_LSQ_Sentinel2&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
        </Layer>
        <Layer queryable="0" opaque="0" cascaded="0">
          <Name>20230605_visible_LSQ_Sentinel2</Name>
          <Title>2023/06/05 - Visible - Lebel-sur-Quévillon - Sentinel2</Title>
          <Abstract>Feux de forêt 2023</Abstract>
          <KeywordList>
            <Keyword>sentinel</Keyword>
            <Keyword>radar</Keyword>
            <Keyword>carte</Keyword>
            <Keyword>feux</Keyword>
            <Keyword>foret</Keyword>
            <Keyword>2023</Keyword>
          </KeywordList>
          <CRS>EPSG:32198</CRS>
          <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:32198" minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=20230605_visible_LSQ_Sentinel2"/>
          </MetadataURL>
          <Style>
            <Name>default</Name>
            <Title>default</Title>
            <LegendURL width="149" height="32">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=20230605_visible_LSQ_Sentinel2&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
        </Layer>
        <Layer queryable="0" opaque="0" cascaded="0">
          <Name>20230602_visible_gouin_sud_Sentinel2</Name>
          <Title>2023/06/02 - Visible - Réservoir Gouin (sud) - Sentinel2</Title>
          <Abstract>Feux de forêt 2023</Abstract>
          <KeywordList>
            <Keyword>sentinel</Keyword>
            <Keyword>radar</Keyword>
            <Keyword>carte</Keyword>
            <Keyword>feux</Keyword>
            <Keyword>foret</Keyword>
            <Keyword>2023</Keyword>
          </KeywordList>
          <CRS>EPSG:32198</CRS>
          <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:32198" minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=20230602_visible_gouin_sud_Sentinel2"/>
          </MetadataURL>
          <Style>
            <Name>default</Name>
            <Title>default</Title>
            <LegendURL width="149" height="32">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=20230602_visible_gouin_sud_Sentinel2&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
        </Layer>
        <Layer queryable="0" opaque="0" cascaded="0">
          <Name>20230603_visible_Cote_nord_Sentinel2</Name>
          <Title>2023/06/03 - Visible - Côte-nord - Sentinel2</Title>
          <Abstract>Feux de forêt 2023</Abstract>
          <KeywordList>
            <Keyword>sentinel</Keyword>
            <Keyword>radar</Keyword>
            <Keyword>carte</Keyword>
            <Keyword>feux</Keyword>
            <Keyword>foret</Keyword>
            <Keyword>2023</Keyword>
          </KeywordList>
          <CRS>EPSG:32198</CRS>
          <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:32198" minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=20230603_visible_Cote_nord_Sentinel2"/>
          </MetadataURL>
          <Style>
            <Name>default</Name>
            <Title>default</Title>
            <LegendURL width="149" height="32">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=20230603_visible_Cote_nord_Sentinel2&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
        </Layer>
        <Layer queryable="1" opaque="0" cascaded="0">
          <Name>feux_2023_points_feux</Name>
          <Title>Feux du 30 mai au 1er août 2023 (SOPFEU)</Title>
          <Abstract>Points des sources de feux</Abstract>
          <KeywordList>
            <Keyword>feux</Keyword>
            <Keyword>SOPFEU</Keyword>
          </KeywordList>
          <CRS>EPSG:3857</CRS>
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
          <BoundingBox CRS="EPSG:3857" minx="-1.0043e+07" miny="5.29118e+06" maxx="-5.20778e+06" maxy="9.42263e+06"/>
          <Dimension name="time" units="ISO8601" nearestValue="0">2023-05-30T00:00:00Z/2023-12-12T00:00:00Z</Dimension>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=feux_2023_points_feux"/>
          </MetadataURL>
          <Style>
            <Name>default</Name>
            <Title>default</Title>
            <LegendURL width="137" height="194">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=feux_2023_points_feux&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
        </Layer>
        <Layer queryable="1" opaque="0" cascaded="0">
          <Name>feux_2023_contours_feux</Name>
          <Title>Contours des feux du 30 mai au 1er août 2023 (SOPFEU)</Title>
          <Abstract>Limites des contour de feux</Abstract>
          <KeywordList>
            <Keyword>feux</Keyword>
            <Keyword>SOPFEU</Keyword>
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
          <BoundingBox CRS="EPSG:42105" minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06"/>
          <Dimension name="time" units="ISO8601" nearestValue="0">2023-05-30T00:00:00Z/2023-12-12T00:00:00Z</Dimension>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=feux_2023_contours_feux"/>
          </MetadataURL>
          <Style>
            <Name>default</Name>
            <Title>default</Title>
            <LegendURL width="87" height="32">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=feux_2023_contours_feux&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
        </Layer>
        <Layer queryable="0" opaque="0" cascaded="0">
          <Name>20230603_visible_gouin_Landsat9</Name>
          <Title>2023/06/03 - Visible - Réservoir Gouin - Landsat9</Title>
          <Abstract>Feux de forêt 2023</Abstract>
          <KeywordList>
            <Keyword>sentinel</Keyword>
            <Keyword>radar</Keyword>
            <Keyword>carte</Keyword>
            <Keyword>feux</Keyword>
            <Keyword>foret</Keyword>
            <Keyword>2023</Keyword>
          </KeywordList>
          <CRS>EPSG:32198</CRS>
          <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:32198" minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=20230603_visible_gouin_Landsat9"/>
          </MetadataURL>
          <Style>
            <Name>default</Name>
            <Title>default</Title>
            <LegendURL width="149" height="32">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=20230603_visible_gouin_Landsat9&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
        </Layer>
      </Layer>
      <Layer queryable="1">
        <Name>Deraillement_de_train_Lac_Megantic</Name>
        <Title>Déraillement de train (Lac-Mégantic)</Title>
        <Abstract>Deraillement_de_train_Lac_Megantic</Abstract>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="305" height="977">
            <Format>image/png</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=Deraillement_de_train_Lac_Megantic&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
        <Layer queryable="0" opaque="0" cascaded="0">
          <Name>MEGANTIC_KOMSAT_20170504</Name>
          <Title>Image Kompsat Lac-Mégantic - 5 mai 2017</Title>
          <KeywordList>
            <Keyword>image</Keyword>
            <Keyword>Kompsat</Keyword>
            <Keyword>Lac-Mégantic</Keyword>
            <Keyword>5</Keyword>
            <Keyword>mai</Keyword>
            <Keyword>2017</Keyword>
            <Keyword>déraillement</Keyword>
            <Keyword>train</Keyword>
          </KeywordList>
          <CRS>EPSG:32198</CRS>
          <CRS>EPSG:900913</CRS>
          <EX_GeographicBoundingBox>
            <westBoundLongitude>-72.7497</westBoundLongitude>
            <eastBoundLongitude>-68.2503</eastBoundLongitude>
            <southBoundLatitude>44.99</southBoundLatitude>
            <northBoundLatitude>61.9082</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:32198" minx="-276507" miny="110521" maxx="13198.5" maxy="1.99073e+06"/>
          <Attribution>
            <Title>&lt;font size='2'&gt;Inclus du matériel &lt;a href='http://www.si-imaging.com/products/' target='_blank'&gt; ©KARI 2017&lt;/a&gt;, Distribution (SI Imaging Services, République de Corée), tous droits réservés.&lt;/a&gt; &lt;/font&gt;</Title>
          </Attribution>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=MEGANTIC_KOMSAT_20170504"/>
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
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=MEGANTIC_KOMSAT_20170504&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
        </Layer>
        <Layer queryable="0" opaque="0" cascaded="0">
          <Name>MEGANTIC_PLEIADES20160424</Name>
          <Title>Image Pleiades Lac-Mégantic - 24 avril 2016</Title>
          <KeywordList>
            <Keyword>image</Keyword>
            <Keyword>pleiades</Keyword>
            <Keyword>Lac-Mégantic</Keyword>
            <Keyword>déraillement</Keyword>
            <Keyword>incident</Keyword>
            <Keyword>train</Keyword>
            <Keyword>24</Keyword>
            <Keyword>avril</Keyword>
            <Keyword>2016</Keyword>
          </KeywordList>
          <CRS>EPSG:32198</CRS>
          <CRS>EPSG:900913</CRS>
          <EX_GeographicBoundingBox>
            <westBoundLongitude>-72.7497</westBoundLongitude>
            <eastBoundLongitude>-68.2503</eastBoundLongitude>
            <southBoundLatitude>44.99</southBoundLatitude>
            <northBoundLatitude>61.9082</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:32198" minx="-276507" miny="110521" maxx="13198.5" maxy="1.99073e+06"/>
          <Attribution>
            <Title>&lt;font size='2'&gt;Inclus du matériel © &lt;a href='http://www.cnes.fr' target='_blank'&gt; CNES  &lt;/a&gt; 2014, &lt;a href='http://www.astrium-geo.com' target='_blank'&gt;Distribution Astrium Services / Spot Image Corporation, États-Unis, tous droits réservés.&lt;/a&gt; &lt;/font&gt;</Title>
          </Attribution>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=MEGANTIC_PLEIADES20160424"/>
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
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=MEGANTIC_PLEIADES20160424&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
        </Layer>
        <Layer queryable="0" opaque="0" cascaded="0">
          <Name>MEGANTIC_PLEIADES20130713</Name>
          <Title>Image Pleiades-1B après l'incident  Lac-Mégantic -  13 juillet 2013</Title>
          <KeywordList>
            <Keyword>image</Keyword>
            <Keyword>pleiades-1B</Keyword>
            <Keyword>après</Keyword>
            <Keyword>incident</Keyword>
            <Keyword>déraillement</Keyword>
            <Keyword>train</Keyword>
            <Keyword>Lac-Mégantic</Keyword>
            <Keyword>13</Keyword>
            <Keyword>juillet</Keyword>
            <Keyword>2013</Keyword>
          </KeywordList>
          <CRS>EPSG:32198</CRS>
          <CRS>EPSG:900913</CRS>
          <EX_GeographicBoundingBox>
            <westBoundLongitude>-72.7497</westBoundLongitude>
            <eastBoundLongitude>-68.2503</eastBoundLongitude>
            <southBoundLatitude>44.99</southBoundLatitude>
            <northBoundLatitude>61.9082</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:32198" minx="-276507" miny="110521" maxx="13198.5" maxy="1.99073e+06"/>
          <Attribution>
            <Title>&lt;font size='2'&gt;Inclus du matériel © &lt;a href='http://www.cnes.fr' target='_blank'&gt; CNES  &lt;/a&gt; 2013, &lt;a href='http://www.astrium-geo.com' target='_blank'&gt;Distribution Astrium Services / Spot Image Corporation, États-Unis, tous droits réservés.&lt;/a&gt; &lt;/font&gt;</Title>
          </Attribution>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=MEGANTIC_PLEIADES20130713"/>
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
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=MEGANTIC_PLEIADES20130713&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
        </Layer>
        <Layer queryable="0" opaque="0" cascaded="0">
          <Name>MEGANTIC_PLEIADES20130729</Name>
          <Title>Image Pleiades-1B après l'incident  Lac-Mégantic -  29 juillet 2013</Title>
          <KeywordList>
            <Keyword>image</Keyword>
            <Keyword>pleiades-1B</Keyword>
            <Keyword>après</Keyword>
            <Keyword>incident</Keyword>
            <Keyword>déraillement</Keyword>
            <Keyword>train</Keyword>
            <Keyword>Lac-Mégantic</Keyword>
            <Keyword>29</Keyword>
            <Keyword>juillet</Keyword>
            <Keyword>2013</Keyword>
          </KeywordList>
          <CRS>EPSG:32198</CRS>
          <CRS>EPSG:900913</CRS>
          <EX_GeographicBoundingBox>
            <westBoundLongitude>-72.7497</westBoundLongitude>
            <eastBoundLongitude>-68.2503</eastBoundLongitude>
            <southBoundLatitude>44.99</southBoundLatitude>
            <northBoundLatitude>61.9082</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:32198" minx="-276507" miny="110521" maxx="13198.5" maxy="1.99073e+06"/>
          <Attribution>
            <Title>&lt;font size='2'&gt;Inclus du matériel © &lt;a href='http://www.cnes.fr' target='_blank'&gt; CNES  &lt;/a&gt; 2013, &lt;a href='http://www.astrium-geo.com' target='_blank'&gt;Distribution Astrium Services / Spot Image Corporation, États-Unis, tous droits réservés.&lt;/a&gt; &lt;/font&gt;</Title>
          </Attribution>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=MEGANTIC_PLEIADES20130729"/>
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
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=MEGANTIC_PLEIADES20130729&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
        </Layer>
        <Layer queryable="0" opaque="0" cascaded="0">
          <Name>MEGANTIC_PLEIADES20151019</Name>
          <Title>Image Pleiades-1B Lac-Mégantic - 19 octobre 2015</Title>
          <KeywordList>
            <Keyword>image</Keyword>
            <Keyword>pleiades-1B</Keyword>
            <Keyword>Lac-Mégantic</Keyword>
            <Keyword>déraillement</Keyword>
            <Keyword>incident</Keyword>
            <Keyword>train</Keyword>
            <Keyword>19</Keyword>
            <Keyword>octobre</Keyword>
            <Keyword>2015</Keyword>
          </KeywordList>
          <CRS>EPSG:32198</CRS>
          <CRS>EPSG:900913</CRS>
          <EX_GeographicBoundingBox>
            <westBoundLongitude>-72.7497</westBoundLongitude>
            <eastBoundLongitude>-68.2503</eastBoundLongitude>
            <southBoundLatitude>44.99</southBoundLatitude>
            <northBoundLatitude>61.9082</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:32198" minx="-276507" miny="110521" maxx="13198.5" maxy="1.99073e+06"/>
          <Attribution>
            <Title>&lt;font size='2'&gt;Inclus du matériel © &lt;a href='http://www.cnes.fr' target='_blank'&gt; CNES  &lt;/a&gt; 2014, &lt;a href='http://www.astrium-geo.com' target='_blank'&gt;Distribution Astrium Services / Spot Image Corporation, États-Unis, tous droits réservés.&lt;/a&gt; &lt;/font&gt;</Title>
          </Attribution>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=MEGANTIC_PLEIADES20151019"/>
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
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=MEGANTIC_PLEIADES20151019&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
        </Layer>
        <Layer queryable="0" opaque="0" cascaded="0">
          <Name>MEGANTIC_PLEIADES20141012</Name>
          <Title>Image Pleiades-1B Lac-Mégantic - 12 octobre 2014</Title>
          <KeywordList>
            <Keyword>image</Keyword>
            <Keyword>pleiades-1B</Keyword>
            <Keyword>déraillement</Keyword>
            <Keyword>incident</Keyword>
            <Keyword>train</Keyword>
            <Keyword>Lac-Mégantic</Keyword>
            <Keyword>12</Keyword>
            <Keyword>octobre</Keyword>
            <Keyword>2014</Keyword>
          </KeywordList>
          <CRS>EPSG:32198</CRS>
          <CRS>EPSG:900913</CRS>
          <EX_GeographicBoundingBox>
            <westBoundLongitude>-72.7497</westBoundLongitude>
            <eastBoundLongitude>-68.2503</eastBoundLongitude>
            <southBoundLatitude>44.99</southBoundLatitude>
            <northBoundLatitude>61.9082</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:32198" minx="-276507" miny="110521" maxx="13198.5" maxy="1.99073e+06"/>
          <Attribution>
            <Title>&lt;font size='2'&gt;Inclus du matériel © &lt;a href='http://www.cnes.fr' target='_blank'&gt; CNES  &lt;/a&gt; 2014, &lt;a href='http://www.astrium-geo.com' target='_blank'&gt;Distribution Astrium Services / Spot Image Corporation, États-Unis, tous droits réservés.&lt;/a&gt; &lt;/font&gt;</Title>
          </Attribution>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=MEGANTIC_PLEIADES20141012"/>
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
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=MEGANTIC_PLEIADES20141012&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
        </Layer>
        <Layer queryable="0" opaque="0" cascaded="0">
          <Name>MEGANTIC_PLEIADES20140702</Name>
          <Title>Image Pleiades-1B Lac-Mégantic - 2 juillet 2014</Title>
          <KeywordList>
            <Keyword>image</Keyword>
            <Keyword>Pleiades-1B</Keyword>
            <Keyword>déraillement</Keyword>
            <Keyword>incident</Keyword>
            <Keyword>train</Keyword>
            <Keyword>Lac-Mégantic</Keyword>
            <Keyword>2</Keyword>
            <Keyword>juillet</Keyword>
            <Keyword>2014</Keyword>
          </KeywordList>
          <CRS>EPSG:32198</CRS>
          <CRS>EPSG:900913</CRS>
          <EX_GeographicBoundingBox>
            <westBoundLongitude>-72.7497</westBoundLongitude>
            <eastBoundLongitude>-68.2503</eastBoundLongitude>
            <southBoundLatitude>44.99</southBoundLatitude>
            <northBoundLatitude>61.9082</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:32198" minx="-276507" miny="110521" maxx="13198.5" maxy="1.99073e+06"/>
          <Attribution>
            <Title>&lt;font size='2'&gt;Inclus du matériel © &lt;a href='http://www.cnes.fr' target='_blank'&gt; CNES  &lt;/a&gt; 2014, &lt;a href='http://www.astrium-geo.com' target='_blank'&gt;Distribution Astrium Services / Spot Image Corporation, États-Unis, tous droits réservés.&lt;/a&gt; &lt;/font&gt;</Title>
          </Attribution>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=MEGANTIC_PLEIADES20140702"/>
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
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=MEGANTIC_PLEIADES20140702&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
        </Layer>
        <Layer queryable="0" opaque="0" cascaded="0">
          <Name>MEGANTIC_PLEIADES20141103</Name>
          <Title>Image Pleiades-1B Lac-Mégantic - 3 novembre 2014</Title>
          <KeywordList>
            <Keyword>image</Keyword>
            <Keyword>pleiades-1B</Keyword>
            <Keyword>Lac-Mégantic</Keyword>
            <Keyword>déraillement</Keyword>
            <Keyword>incident</Keyword>
            <Keyword>train</Keyword>
            <Keyword>3</Keyword>
            <Keyword>novembre</Keyword>
            <Keyword>2014</Keyword>
          </KeywordList>
          <CRS>EPSG:32198</CRS>
          <CRS>EPSG:900913</CRS>
          <EX_GeographicBoundingBox>
            <westBoundLongitude>-72.7497</westBoundLongitude>
            <eastBoundLongitude>-68.2503</eastBoundLongitude>
            <southBoundLatitude>44.99</southBoundLatitude>
            <northBoundLatitude>61.9082</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:32198" minx="-276507" miny="110521" maxx="13198.5" maxy="1.99073e+06"/>
          <Attribution>
            <Title>&lt;font size='2'&gt;Inclus du matériel © &lt;a href='http://www.cnes.fr' target='_blank'&gt; CNES  &lt;/a&gt; 2014, &lt;a href='http://www.astrium-geo.com' target='_blank'&gt;Distribution Astrium Services / Spot Image Corporation, États-Unis, tous droits réservés.&lt;/a&gt; &lt;/font&gt;</Title>
          </Attribution>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=MEGANTIC_PLEIADES20141103"/>
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
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=MEGANTIC_PLEIADES20141103&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
        </Layer>
        <Layer queryable="0" opaque="0" cascaded="0">
          <Name>MEGANTIC_PLEIADES20130815</Name>
          <Title>Image Pleiades-1B après l'incident  Lac-Mégantic -  15 août 2013</Title>
          <KeywordList>
            <Keyword>image</Keyword>
            <Keyword>pleiades-1B</Keyword>
            <Keyword>après</Keyword>
            <Keyword>incident</Keyword>
            <Keyword>déraillement</Keyword>
            <Keyword>train</Keyword>
            <Keyword>Lac-Mégantic</Keyword>
            <Keyword>15</Keyword>
            <Keyword>août</Keyword>
            <Keyword>2013</Keyword>
          </KeywordList>
          <CRS>EPSG:32198</CRS>
          <CRS>EPSG:900913</CRS>
          <EX_GeographicBoundingBox>
            <westBoundLongitude>-72.7497</westBoundLongitude>
            <eastBoundLongitude>-68.2503</eastBoundLongitude>
            <southBoundLatitude>44.99</southBoundLatitude>
            <northBoundLatitude>61.9082</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:32198" minx="-276507" miny="110521" maxx="13198.5" maxy="1.99073e+06"/>
          <Attribution>
            <Title>&lt;font size='2'&gt;Inclus du matériel © &lt;a href='http://www.cnes.fr' target='_blank'&gt; CNES  &lt;/a&gt; 2013, &lt;a href='http://www.astrium-geo.com' target='_blank'&gt;Distribution Astrium Services / Spot Image Corporation, États-Unis, tous droits réservés.&lt;/a&gt; &lt;/font&gt;</Title>
          </Attribution>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=MEGANTIC_PLEIADES20130815"/>
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
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=MEGANTIC_PLEIADES20130815&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
        </Layer>
        <Layer queryable="0" opaque="0" cascaded="0">
          <Name>MEGANTIC_PLEIADES20130802</Name>
          <Title>Image Pleiades-1A après l'incident  Lac-Mégantic -  2 août 2013</Title>
          <KeywordList>
            <Keyword>image</Keyword>
            <Keyword>pleiades-1A</Keyword>
            <Keyword>après</Keyword>
            <Keyword>incident</Keyword>
            <Keyword>déraillement</Keyword>
            <Keyword>train</Keyword>
            <Keyword>Lac-Mégantic</Keyword>
            <Keyword>2</Keyword>
            <Keyword>août</Keyword>
            <Keyword>2013</Keyword>
          </KeywordList>
          <CRS>EPSG:32198</CRS>
          <CRS>EPSG:900913</CRS>
          <EX_GeographicBoundingBox>
            <westBoundLongitude>-72.7497</westBoundLongitude>
            <eastBoundLongitude>-68.2503</eastBoundLongitude>
            <southBoundLatitude>44.99</southBoundLatitude>
            <northBoundLatitude>61.9082</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:32198" minx="-276507" miny="110521" maxx="13198.5" maxy="1.99073e+06"/>
          <Attribution>
            <Title>&lt;font size='2'&gt;Inclus du matériel © &lt;a href='http://www.cnes.fr' target='_blank'&gt; CNES  &lt;/a&gt; 2013, &lt;a href='http://www.astrium-geo.com' target='_blank'&gt;Distribution Astrium Services / Spot Image Corporation, États-Unis, tous droits réservés.&lt;/a&gt; &lt;/font&gt;</Title>
          </Attribution>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=MEGANTIC_PLEIADES20130802"/>
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
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=MEGANTIC_PLEIADES20130802&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
        </Layer>
      </Layer>
      <Layer queryable="1">
        <Name>Inondations_2017</Name>
        <Title>Inondations 2017</Title>
        <Abstract>Inondations_2017</Abstract>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="316" height="1058">
            <Format>image/png</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=Inondations_2017&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
        <Layer queryable="1" opaque="0" cascaded="0">
          <Name>INONDATION_20MAI2017_STPIERRE</Name>
          <Title>Zone (20 mai 2017 - Lac St-Pierre) d'eau libre selon traitement RNCAN avec Radarsat-2</Title>
          <CRS>EPSG:32198</CRS>
          <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:32198" minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=INONDATION_20MAI2017_STPIERRE"/>
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
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=INONDATION_20MAI2017_STPIERRE&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
          <MinScaleDenominator>1</MinScaleDenominator>
          <MaxScaleDenominator>1e+07</MaxScaleDenominator>
        </Layer>
        <Layer queryable="0" opaque="0" cascaded="0">
          <Name>SPOT6_LAC_STPIERRE_IMAGERIE_VIS_16MAI</Name>
          <Title>Image visible (16 mai 2017, SPOT-6) - Lac St-Pierre</Title>
          <KeywordList>
            <Keyword>image</Keyword>
            <Keyword>visible</Keyword>
            <Keyword>inondations</Keyword>
            <Keyword>16</Keyword>
            <Keyword>mai</Keyword>
            <Keyword>2017</Keyword>
            <Keyword>SPOT-6</Keyword>
            <Keyword>Lac</Keyword>
            <Keyword>St-Pierre</Keyword>
          </KeywordList>
          <CRS>EPSG:32198</CRS>
          <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:32198" minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=SPOT6_LAC_STPIERRE_IMAGERIE_VIS_16MAI"/>
          </MetadataURL>
          <DataURL>
            <Format>text/html</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/metadata/images-satellites-inondation-23-avril-2017"/>
          </DataURL>
          <Style>
            <Name>default</Name>
            <Title>default</Title>
            <LegendURL width="157" height="32">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=SPOT6_LAC_STPIERRE_IMAGERIE_VIS_16MAI&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
        </Layer>
        <Layer queryable="1" opaque="0" cascaded="0">
          <Name>INONDATION_7MAI2017_GATINEAU</Name>
          <Title>Zone d'eau libre selon traitement RNCAN avec Radarsat-2 (7 mai 2017 - GATINEAU)</Title>
          <CRS>EPSG:32198</CRS>
          <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:32198" minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=INONDATION_7MAI2017_GATINEAU"/>
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
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=INONDATION_7MAI2017_GATINEAU&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
          <MinScaleDenominator>1</MinScaleDenominator>
          <MaxScaleDenominator>1e+07</MaxScaleDenominator>
        </Layer>
        <Layer queryable="1" opaque="0" cascaded="0">
          <Name>vg_observation_inondation_23avril2017_mun_tout_v</Name>
          <Title>Municipalités touchées par les inondations du printemps 2017 (selon les événements rapports au COG)</Title>
          <Abstract>Municipalité touchées par les inondations du printemps 2017 (selon les événements rapports au COG)</Abstract>
          <KeywordList>
            <Keyword>inondations</Keyword>
            <Keyword> municipalité</Keyword>
          </KeywordList>
          <CRS>EPSG:32198</CRS>
          <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:32198" minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=vg_observation_inondation_23avril2017_mun_tout_v"/>
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
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=vg_observation_inondation_23avril2017_mun_tout_v&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
          <MinScaleDenominator>10000</MinScaleDenominator>
          <MaxScaleDenominator>200000</MaxScaleDenominator>
        </Layer>
        <Layer queryable="1" opaque="0" cascaded="0">
          <Name>INONDATION_9MAI2017_DEUXMONTAGNE</Name>
          <Title>Zone d'eau libre selon traitement RNCAN avec Radarsat-2 (9 mai 2017 - Lac des Deux Montagnes)</Title>
          <CRS>EPSG:32198</CRS>
          <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:32198" minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=INONDATION_9MAI2017_DEUXMONTAGNE"/>
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
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=INONDATION_9MAI2017_DEUXMONTAGNE&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
          <MinScaleDenominator>1</MinScaleDenominator>
          <MaxScaleDenominator>1e+07</MaxScaleDenominator>
        </Layer>
        <Layer queryable="0" opaque="0" cascaded="0">
          <Name>SPOT6_LAC_STPIERRE_IMAGERIE_VIS</Name>
          <Title>Image visible - Lac St-Pierre (11 mai 2017, SPOT-6)</Title>
          <KeywordList>
            <Keyword>image</Keyword>
            <Keyword>visible</Keyword>
            <Keyword>Lac</Keyword>
            <Keyword>St-Pierre</Keyword>
            <Keyword>inondations</Keyword>
            <Keyword>11</Keyword>
            <Keyword>mai</Keyword>
            <Keyword>2017</Keyword>
            <Keyword>SPOT-6</Keyword>
          </KeywordList>
          <CRS>EPSG:32188</CRS>
          <EX_GeographicBoundingBox>
            <westBoundLongitude>-75.7994</westBoundLongitude>
            <eastBoundLongitude>-71.2006</eastBoundLongitude>
            <southBoundLatitude>44.99</southBoundLatitude>
            <northBoundLatitude>62.568</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:32188" minx="186521" miny="4.98443e+06" maxx="423079" maxy="6.93955e+06"/>
          <Attribution>
            <Title>&lt;font size='2'&gt;© [2017] Airbus Defence and Space, Licence par Planet Labs Geomatics Corp., www.blackbridge.com/geomatics&lt;/a&gt; &lt;/font&gt;</Title>
          </Attribution>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=SPOT6_LAC_STPIERRE_IMAGERIE_VIS"/>
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
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=SPOT6_LAC_STPIERRE_IMAGERIE_VIS&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
        </Layer>
        <Layer queryable="1" opaque="0" cascaded="0">
          <Name>INONDATION_6MAI2017_STPIERRE</Name>
          <Title>Zone d'eau libre selon traitement RNCAN avec Radarsat-2 (6 mai 2017 - Lac Saint-Pierre)</Title>
          <CRS>EPSG:32198</CRS>
          <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:32198" minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=INONDATION_6MAI2017_STPIERRE"/>
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
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=INONDATION_6MAI2017_STPIERRE&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
          <MinScaleDenominator>1</MinScaleDenominator>
          <MaxScaleDenominator>1e+07</MaxScaleDenominator>
        </Layer>
        <Layer queryable="0" opaque="0" cascaded="0">
          <Name>SPOT6_ARCHIPEL_OUEST_IMAGERIE_16MAI_INFRAR</Name>
          <Title>Image infrarouge - (16 mai 2017, SPOT-6) - archipel</Title>
          <KeywordList>
            <Keyword>image</Keyword>
            <Keyword>infrarouge</Keyword>
            <Keyword>inondations</Keyword>
            <Keyword>16</Keyword>
            <Keyword>mai</Keyword>
            <Keyword>2017</Keyword>
            <Keyword>SPOT-6</Keyword>
            <Keyword>archipel</Keyword>
          </KeywordList>
          <CRS>EPSG:32198</CRS>
          <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:32198" minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06"/>
          <Attribution>
            <Title>&lt;font size='2'&gt;© [2017] Airbus Defence and Space, Licence par Planet Labs Geomatics Corp., www.blackbridge.com/geomatics &lt;/a&gt; &lt;/font&gt;</Title>
          </Attribution>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=SPOT6_ARCHIPEL_OUEST_IMAGERIE_16MAI_INFRAR"/>
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
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=SPOT6_ARCHIPEL_OUEST_IMAGERIE_16MAI_INFRAR&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
        </Layer>
        <Layer queryable="0" opaque="0" cascaded="0">
          <Name>PLEIADE_RIGAUD_12MAI_IMAGERIE_VIS</Name>
          <Title>Image Rigaud - visible (12 mai 2017, Pléiades)</Title>
          <KeywordList>
            <Keyword>image</Keyword>
            <Keyword>Rigaud</Keyword>
            <Keyword>visible</Keyword>
            <Keyword>inondatons</Keyword>
            <Keyword>12</Keyword>
            <Keyword>mai</Keyword>
            <Keyword>2017</Keyword>
            <Keyword>pléiades</Keyword>
          </KeywordList>
          <CRS>EPSG:32188</CRS>
          <EX_GeographicBoundingBox>
            <westBoundLongitude>-75.7994</westBoundLongitude>
            <eastBoundLongitude>-71.2006</eastBoundLongitude>
            <southBoundLatitude>44.99</southBoundLatitude>
            <northBoundLatitude>62.568</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:32188" minx="186521" miny="4.98443e+06" maxx="423079" maxy="6.93955e+06"/>
          <Attribution>
            <Title>&lt;font size='2'&gt;Inclus du matériel © CNES (2017), Distribution Astrium Services / Spot Image Corporation, USA, tous droits réservés&lt;/a&gt; &lt;/font&gt;</Title>
          </Attribution>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=PLEIADE_RIGAUD_12MAI_IMAGERIE_VIS"/>
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
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=PLEIADE_RIGAUD_12MAI_IMAGERIE_VIS&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
        </Layer>
        <Layer queryable="0" opaque="0" cascaded="0">
          <Name>SPOT6_LAC_STPIERRE_IMAGERIE_INFRAR_16MAI</Name>
          <Title>Image infrarouge (16 mai 2017, SPOT-6) - Lac St-Pierre</Title>
          <KeywordList>
            <Keyword>image</Keyword>
            <Keyword>infrarouge</Keyword>
            <Keyword>inondations</Keyword>
            <Keyword>16</Keyword>
            <Keyword>mai</Keyword>
            <Keyword>2017</Keyword>
            <Keyword>SPOT-6</Keyword>
            <Keyword>Lac</Keyword>
            <Keyword>St-Pierre</Keyword>
          </KeywordList>
          <CRS>EPSG:32198</CRS>
          <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:32198" minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=SPOT6_LAC_STPIERRE_IMAGERIE_INFRAR_16MAI"/>
          </MetadataURL>
          <DataURL>
            <Format>text/html</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/metadata/images-satellites-inondation-23-avril-2017"/>
          </DataURL>
          <Style>
            <Name>default</Name>
            <Title>default</Title>
            <LegendURL width="157" height="32">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=SPOT6_LAC_STPIERRE_IMAGERIE_INFRAR_16MAI&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
        </Layer>
        <Layer queryable="1" opaque="0" cascaded="0">
          <Name>INONDATION_9MAI2017_GATINEAU_UNION</Name>
          <Title>Zone d'eau libre selon traitement RNCAN avec Radarsat-2 (9 mai 2017 - GATINEAU)</Title>
          <CRS>EPSG:32198</CRS>
          <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:32198" minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=INONDATION_9MAI2017_GATINEAU_UNION"/>
          </MetadataURL>
          <Style>
            <Name>default</Name>
            <Title>default</Title>
            <LegendURL width="149" height="32">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=INONDATION_9MAI2017_GATINEAU_UNION&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
          <MinScaleDenominator>1</MinScaleDenominator>
          <MaxScaleDenominator>1e+07</MaxScaleDenominator>
        </Layer>
        <Layer queryable="1" opaque="0" cascaded="0">
          <Name>INONDATION_13MAI2017_DEUXMONTAGNE</Name>
          <Title>Zone d'eau libre selon traitement RNCAN avec Radarsat-2 (13 mai 2017 - Lac des Deux Montagnes)</Title>
          <CRS>EPSG:32198</CRS>
          <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:32198" minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=INONDATION_13MAI2017_DEUXMONTAGNE"/>
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
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=INONDATION_13MAI2017_DEUXMONTAGNE&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
          <MinScaleDenominator>1</MinScaleDenominator>
          <MaxScaleDenominator>1e+07</MaxScaleDenominator>
        </Layer>
        <Layer queryable="1" opaque="0" cascaded="0">
          <Name>INONDATION_11MAI2017_STPIERRE</Name>
          <Title>Zone d'eau libre selon traitement RNCAN avec Radarsat-2 (11 mai 2017 - Lac St-Pierre)</Title>
          <CRS>EPSG:32198</CRS>
          <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:32198" minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=INONDATION_11MAI2017_STPIERRE"/>
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
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=INONDATION_11MAI2017_STPIERRE&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
          <MinScaleDenominator>1</MinScaleDenominator>
          <MaxScaleDenominator>1e+07</MaxScaleDenominator>
        </Layer>
        <Layer queryable="1" opaque="0" cascaded="0">
          <Name>INONDATION_13MAI2017_STPIERRE</Name>
          <Title>Zone d'eau libre selon traitement RNCAN avec Radarsat-2 (13 mai 2017 - Lac St-Pierre)</Title>
          <CRS>EPSG:32198</CRS>
          <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:32198" minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=INONDATION_13MAI2017_STPIERRE"/>
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
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=INONDATION_13MAI2017_STPIERRE&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
          <MinScaleDenominator>1</MinScaleDenominator>
          <MaxScaleDenominator>1e+07</MaxScaleDenominator>
        </Layer>
        <Layer queryable="0" opaque="0" cascaded="0">
          <Name>PLEIADE_GATINEAU_10MAI_IMAGERIE_INFRAR</Name>
          <Title>Image Gatineau - infrarouge (10 mai 2017, Pléiades)</Title>
          <KeywordList>
            <Keyword>image</Keyword>
            <Keyword>Gatineau</Keyword>
            <Keyword>infrarouge</Keyword>
            <Keyword>inondations</Keyword>
            <Keyword>10</Keyword>
            <Keyword>mai</Keyword>
            <Keyword>2017</Keyword>
            <Keyword>pléiades</Keyword>
          </KeywordList>
          <CRS>EPSG:32189</CRS>
          <EX_GeographicBoundingBox>
            <westBoundLongitude>-78.8581</westBoundLongitude>
            <eastBoundLongitude>-74.1419</eastBoundLongitude>
            <southBoundLatitude>43.5</southBoundLatitude>
            <northBoundLatitude>62.568</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:32189" minx="183496" miny="4.81888e+06" maxx="426104" maxy="6.93955e+06"/>
          <Attribution>
            <Title>&lt;font size='2'&gt;Inclus du matériel © CNES (2017), Distribution Astrium Services / Spot Image Corporation, USA, tous droits réservés&lt;/a&gt; &lt;/font&gt;</Title>
          </Attribution>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=PLEIADE_GATINEAU_10MAI_IMAGERIE_INFRAR"/>
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
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=PLEIADE_GATINEAU_10MAI_IMAGERIE_INFRAR&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
        </Layer>
        <Layer queryable="0" opaque="0" cascaded="0">
          <Name>SPOT6_LAC_STPIERRE_IMAGERIE_INFRAR</Name>
          <Title>Image Lac St-Pierre - infrarouge (11 mai 2017, SPOT-6)</Title>
          <KeywordList>
            <Keyword>image</Keyword>
            <Keyword>Lac</Keyword>
            <Keyword>St-Pierre</Keyword>
            <Keyword>infrarouge</Keyword>
            <Keyword>inondations</Keyword>
            <Keyword>11</Keyword>
            <Keyword>mai</Keyword>
            <Keyword>2017</Keyword>
            <Keyword>SPOT-6</Keyword>
          </KeywordList>
          <CRS>EPSG:32188</CRS>
          <EX_GeographicBoundingBox>
            <westBoundLongitude>-75.7994</westBoundLongitude>
            <eastBoundLongitude>-71.2006</eastBoundLongitude>
            <southBoundLatitude>44.99</southBoundLatitude>
            <northBoundLatitude>62.568</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:32188" minx="186521" miny="4.98443e+06" maxx="423079" maxy="6.93955e+06"/>
          <Attribution>
            <Title>&lt;font size='2'&gt;© [2017] Airbus Defence and Space, Licence par Planet Labs Geomatics Corp., www.blackbridge.com/geomatics &lt;/a&gt; &lt;/font&gt;</Title>
          </Attribution>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=SPOT6_LAC_STPIERRE_IMAGERIE_INFRAR"/>
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
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=SPOT6_LAC_STPIERRE_IMAGERIE_INFRAR&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
        </Layer>
        <Layer queryable="0" opaque="0" cascaded="0">
          <Name>PLEIADE_GATINEAU_10MAI_IMAGERIE_VIS</Name>
          <Title>Image Gatineau - visible (10 mai 2017, Pléiades)</Title>
          <KeywordList>
            <Keyword>image</Keyword>
            <Keyword>Gatineau</Keyword>
            <Keyword>visible</Keyword>
            <Keyword>inondations</Keyword>
            <Keyword>10</Keyword>
            <Keyword>mai</Keyword>
            <Keyword>2017</Keyword>
            <Keyword>pléiades)</Keyword>
          </KeywordList>
          <CRS>EPSG:32189</CRS>
          <EX_GeographicBoundingBox>
            <westBoundLongitude>-78.8581</westBoundLongitude>
            <eastBoundLongitude>-74.1419</eastBoundLongitude>
            <southBoundLatitude>43.5</southBoundLatitude>
            <northBoundLatitude>62.568</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:32189" minx="183496" miny="4.81888e+06" maxx="426104" maxy="6.93955e+06"/>
          <Attribution>
            <Title>&lt;font size='2'&gt;Inclus du matériel © CNES (2017), Distribution Astrium Services / Spot Image Corporation, USA, tous droits réservés&lt;/a&gt; &lt;/font&gt;</Title>
          </Attribution>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=PLEIADE_GATINEAU_10MAI_IMAGERIE_VIS"/>
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
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=PLEIADE_GATINEAU_10MAI_IMAGERIE_VIS&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
        </Layer>
        <Layer queryable="1" opaque="0" cascaded="0">
          <Name>INONDATION_17MAI2017_STPIERRE</Name>
          <Title>Zone (17 mai 2017 - Lac St-Pierre) d'eau libre selon traitement RNCAN avec Radarsat-2</Title>
          <CRS>EPSG:32198</CRS>
          <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:32198" minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=INONDATION_17MAI2017_STPIERRE"/>
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
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=INONDATION_17MAI2017_STPIERRE&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
          <MinScaleDenominator>1</MinScaleDenominator>
          <MaxScaleDenominator>1e+07</MaxScaleDenominator>
        </Layer>
        <Layer queryable="1" opaque="0" cascaded="0">
          <Name>INONDATION_21MAI2017_DEUXMONTAGNE</Name>
          <Title>Zone (21 mai 2017 - Lac des Deux Montagnes) d'eau libre selon traitement RNCAN avec Radarsat-2</Title>
          <CRS>EPSG:32198</CRS>
          <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:32198" minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=INONDATION_21MAI2017_DEUXMONTAGNE"/>
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
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=INONDATION_21MAI2017_DEUXMONTAGNE&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
          <MinScaleDenominator>1</MinScaleDenominator>
          <MaxScaleDenominator>1e+07</MaxScaleDenominator>
        </Layer>
        <Layer queryable="0" opaque="0" cascaded="0">
          <Name>PLEIADE_RIGAUD_12MAI_IMAGERIE_INFRAR</Name>
          <Title>Image Rigaud - infrarouge (12 mai 2017, Pléiades)</Title>
          <KeywordList>
            <Keyword>image</Keyword>
            <Keyword>Rigaud</Keyword>
            <Keyword>infrarouge</Keyword>
            <Keyword>12</Keyword>
            <Keyword>mai</Keyword>
            <Keyword>2017</Keyword>
            <Keyword>pléiades</Keyword>
            <Keyword>inondations</Keyword>
          </KeywordList>
          <CRS>EPSG:32188</CRS>
          <EX_GeographicBoundingBox>
            <westBoundLongitude>-75.7994</westBoundLongitude>
            <eastBoundLongitude>-71.2006</eastBoundLongitude>
            <southBoundLatitude>44.99</southBoundLatitude>
            <northBoundLatitude>62.568</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:32188" minx="186521" miny="4.98443e+06" maxx="423079" maxy="6.93955e+06"/>
          <Attribution>
            <Title>&lt;font size='2'&gt;Inclus du matériel © CNES (2017), Distribution Astrium Services / Spot Image Corporation, USA, tous droits réservés&lt;/a&gt; &lt;/font&gt;</Title>
          </Attribution>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=PLEIADE_RIGAUD_12MAI_IMAGERIE_INFRAR"/>
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
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=PLEIADE_RIGAUD_12MAI_IMAGERIE_INFRAR&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
        </Layer>
        <Layer queryable="1" opaque="0" cascaded="0">
          <Name>vg_observation_v_inondation23avril2017_wmst</Name>
          <Title>Historique des événements d'inondation depuis 23 avril 2017</Title>
          <KeywordList>
            <Keyword>historique</Keyword>
            <Keyword>événements</Keyword>
            <Keyword>inondations</Keyword>
            <Keyword>23</Keyword>
            <Keyword>avril</Keyword>
            <Keyword>2017</Keyword>
            <Keyword>observations</Keyword>
            <Keyword>terrains</Keyword>
          </KeywordList>
          <CRS>EPSG:32198</CRS>
          <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:32198" minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06"/>
          <Dimension name="time" units="ISO8601" nearestValue="0">2017-04-22T05:00:00Z/2025-07-31T05:00:00Z</Dimension>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=vg_observation_v_inondation23avril2017_wmst"/>
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
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=vg_observation_v_inondation23avril2017_wmst&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
        </Layer>
        <Layer queryable="0" opaque="0" cascaded="0">
          <Name>SPOT6_ARCHIPEL_OUEST_IMAGERIE_16MAI</Name>
          <Title>Image visible - (16 mai 2017, SPOT-6) - archipel</Title>
          <KeywordList>
            <Keyword>Image</Keyword>
            <Keyword>visible</Keyword>
            <Keyword>inondations</Keyword>
            <Keyword>16</Keyword>
            <Keyword>mai</Keyword>
            <Keyword>2017</Keyword>
            <Keyword>SPOT-6</Keyword>
            <Keyword>archipel</Keyword>
          </KeywordList>
          <CRS>EPSG:32198</CRS>
          <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:32198" minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06"/>
          <Attribution>
            <Title>&lt;font size='2'&gt;© CNES (2017), Distribution AIRBUS DS&lt;/a&gt; &lt;/font&gt;</Title>
          </Attribution>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=SPOT6_ARCHIPEL_OUEST_IMAGERIE_16MAI"/>
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
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=SPOT6_ARCHIPEL_OUEST_IMAGERIE_16MAI&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
        </Layer>
        <Layer queryable="1" opaque="0" cascaded="0">
          <Name>INONDATION_6MAI2017_DEUXMONTAGNE</Name>
          <Title>Zone d'eau libre selon traitement RNCAN avec Radarsat-2 (6 mai 2017 - Lac des Deux Montagnes)</Title>
          <CRS>EPSG:32198</CRS>
          <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:32198" minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06"/>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=INONDATION_6MAI2017_DEUXMONTAGNE"/>
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
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=INONDATION_6MAI2017_DEUXMONTAGNE&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
          <MinScaleDenominator>1</MinScaleDenominator>
          <MaxScaleDenominator>1e+07</MaxScaleDenominator>
        </Layer>
      </Layer>
      <Layer queryable="1">
        <Name>Retablissement</Name>
        <Title>Rétablissement</Title>
        <Abstract>Retablissement</Abstract>
        <Style>
          <Name>default</Name>
          <Title>default</Title>
          <LegendURL width="223" height="896">
            <Format>image/png</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=Retablissement&amp;format=image/png&amp;STYLE=default"/>
          </LegendURL>
        </Style>
        <Layer queryable="1" opaque="0" cascaded="0">
          <Name>vg_observation_autre_tout_dre_sensible_p_v_wmst</Name>
          <Title>Observation terrain/Historiques-MSP 1990-2010 (Archives)</Title>
          <KeywordList>
            <Keyword>historiques</Keyword>
            <Keyword>msp</Keyword>
            <Keyword>1990-2010</Keyword>
            <Keyword>observations</Keyword>
            <Keyword>terrains</Keyword>
            <Keyword>OSCQ</Keyword>
          </KeywordList>
          <CRS>EPSG:32198</CRS>
          <EX_GeographicBoundingBox>
            <westBoundLongitude>-90.2178</westBoundLongitude>
            <eastBoundLongitude>-46.7822</eastBoundLongitude>
            <southBoundLatitude>42.8632</southBoundLatitude>
            <northBoundLatitude>64.2855</northBoundLatitude>
          </EX_GeographicBoundingBox>
          <BoundingBox CRS="EPSG:32198" minx="-1.1e+06" miny="-23500" maxx="1.1e+06" maxy="2.2535e+06"/>
          <Dimension name="time" units="ISO8601" nearestValue="0">1900-01-01T05:00:00Z/2025-07-31T05:00:00Z</Dimension>
          <MetadataURL type="TC211">
            <Format>text/xml</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=vg_observation_autre_tout_dre_sensible_p_v_wmst"/>
          </MetadataURL>
          <DataURL>
            <Format>text/html</Format>
            <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/metadata/a725b0cf-30e7-43b7-9158-a0c6b23c2ef9"/>
          </DataURL>
          <Style>
            <Name>default</Name>
            <Title>default</Title>
            <LegendURL width="223" height="599">
              <Format>image/png</Format>
              <OnlineResource xmlns:xlink="http://www.w3.org/1999/xlink" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?version=1.3.0&amp;service=WMS&amp;request=GetLegendGraphic&amp;sld_version=1.1.0&amp;layer=vg_observation_autre_tout_dre_sensible_p_v_wmst&amp;format=image/png&amp;STYLE=default"/>
            </LegendURL>
          </Style>
        </Layer>
      </Layer>
    </Layer>
  </Capability>
</WMS_Capabilities>