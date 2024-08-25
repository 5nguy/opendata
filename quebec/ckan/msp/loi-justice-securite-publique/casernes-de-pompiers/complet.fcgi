<?xml version="1.0" encoding="UTF-8" standalone="yes"?>
<wfs:WFS_Capabilities xmlns:gml="http://www.opengis.net/gml" xmlns:wfs="http://www.opengis.net/wfs" xmlns:ows="http://www.opengis.net/ows" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:ogc="http://www.opengis.net/ogc" xmlns="http://www.opengis.net/wfs" version="1.1.0" xsi:schemaLocation="http://www.opengis.net/wfs http://schemas.opengis.net/wfs/1.1.0/wfs.xsd">
  <ows:ServiceIdentification>
    <ows:Title>Service web du Ministère de la Sécurité publique du Québec</ows:Title>
    <ows:Abstract>Service web du Ministère de la Sécurité publique du Québec (MSP)</ows:Abstract>
    <ows:Keywords>
      <ows:Keyword>MSP</ows:Keyword>
    </ows:Keywords>
    <ows:ServiceType codeSpace="OGC">OGC WFS</ows:ServiceType>
    <ows:ServiceTypeVersion>1.1.0</ows:ServiceTypeVersion>
    <ows:Fees>none</ows:Fees>
    <ows:AccessConstraints>L'utilisation des données de ce service WMS est sujette aux conditions d'utilisation stipulées par l'entente ou l'accord de licence entre le Ministère de la sécurité publique du Québec (MSP) et son propriétaire.  Ce service WMS est diffusé selon les informations fournies par le propriétaire et n'a aucune valeur légale. Le Ministère de la sécurité publique n'est pas responsable des erreurs qui pourraient s'y retrouver.</ows:AccessConstraints>
  </ows:ServiceIdentification>
  <ows:ServiceProvider>
    <ows:ProviderName>Ministère de la sécurité publique</ows:ProviderName>
    <ows:ProviderSite xlink:type="simple" xlink:href=""/>
    <ows:ServiceContact>
      <ows:IndividualName>Équipe géomatique</ows:IndividualName>
      <ows:PositionName/>
      <ows:ContactInfo>
        <ows:Phone>
          <ows:Voice/>
          <ows:Facsimile/>
        </ows:Phone>
        <ows:Address>
          <ows:DeliveryPoint/>
          <ows:City/>
          <ows:AdministrativeArea/>
          <ows:PostalCode/>
          <ows:Country/>
          <ows:ElectronicMailAddress>geomsp@msp.gouv.qc.ca</ows:ElectronicMailAddress>
        </ows:Address>
        <ows:OnlineResource xlink:type="simple" xlink:href=""/>
        <ows:HoursOfService/>
        <ows:ContactInstructions/>
      </ows:ContactInfo>
      <ows:Role/>
    </ows:ServiceContact>
  </ows:ServiceProvider>
  <ows:OperationsMetadata>
    <ows:Operation name="GetCapabilities">
      <ows:DCP>
        <ows:HTTP>
          <ows:Get xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?"/>
          <ows:Post xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?"/>
        </ows:HTTP>
      </ows:DCP>
      <ows:Parameter name="service">
        <ows:Value>WFS</ows:Value>
      </ows:Parameter>
      <ows:Parameter name="AcceptVersions">
        <ows:Value>1.0.0</ows:Value>
        <ows:Value>1.1.0</ows:Value>
      </ows:Parameter>
      <ows:Parameter name="AcceptFormats">
        <ows:Value>text/xml</ows:Value>
      </ows:Parameter>
    </ows:Operation>
    <ows:Operation name="DescribeFeatureType">
      <ows:DCP>
        <ows:HTTP>
          <ows:Get xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?"/>
          <ows:Post xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?"/>
        </ows:HTTP>
      </ows:DCP>
      <ows:Parameter name="outputFormat">
        <ows:Value>XMLSCHEMA</ows:Value>
        <ows:Value>text/xml; subtype=gml/2.1.2</ows:Value>
        <ows:Value>text/xml; subtype=gml/3.1.1</ows:Value>
      </ows:Parameter>
    </ows:Operation>
    <ows:Operation name="GetFeature">
      <ows:DCP>
        <ows:HTTP>
          <ows:Get xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?"/>
          <ows:Post xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?"/>
        </ows:HTTP>
      </ows:DCP>
      <ows:Parameter name="resultType">
        <ows:Value>results</ows:Value>
        <ows:Value>hits</ows:Value>
      </ows:Parameter>
      <ows:Parameter name="outputFormat">
        <ows:Value>text/xml; subtype=gml/3.1.1</ows:Value>
        <ows:Value>SHP</ows:Value>
        <ows:Value>text/csv; charset=utf-8</ows:Value>
        <ows:Value>application/json; subtype=geojson</ows:Value>
      </ows:Parameter>
    </ows:Operation>
  </ows:OperationsMetadata>
  <FeatureTypeList>
    <Operations>
      <Operation>Query</Operation>
    </Operations>
    <FeatureType>
      <Name>msp_v_couverture_cellulaire_s</Name>
      <Title>Desserte 9-1-1 (couverture cellulaire)</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=msp_v_couverture_cellulaire_s</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>MSP_DESSERTE_MUN_911</Name>
      <Title>MSP_DESSERTE_MUN_911</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=MSP_DESSERTE_MUN_911</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>dpp_zone_erosion_s</Name>
      <Title>Zones de contraintes érosion/mouvement de terrain</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=dpp_zone_erosion_s</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>dpp_grille_s</Name>
      <Title>Grille</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=dpp_grille_s</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>dpp_trait_cote_l</Name>
      <Title>Traits de côte</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=dpp_trait_cote_l</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>sopfeu_interdiction_feu_ciel_ouvert</Name>
      <Title>sopfeu_interdiction_feu_ciel_ouvert</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=sopfeu_interdiction_feu_ciel_ouvert</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>sopfeu_interdiction_acces_foret</Name>
      <Title>sopfeu_interdiction_acces_foret</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=sopfeu_interdiction_acces_foret</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>points_feux_historique</Name>
      <Title>points_feux_historique</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=points_feux_historique</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>sopfeu_interdiction_circuler_foret</Name>
      <Title>sopfeu_interdiction_circuler_foret</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=sopfeu_interdiction_circuler_foret</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>points_feux</Name>
      <Title>points_feux</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=points_feux</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>masas_naad_adna_s_public</Name>
      <Title>masas_naad_adna_s_public</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2178 42.8632</ows:LowerCorner>
        <ows:UpperCorner>-46.7822 64.2855</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=masas_naad_adna_s_public</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>MSP_DIRECTION_REG_COG_S</Name>
      <Title>Directions régionales de la sécurité civile et de la sécurité incendie</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=MSP_DIRECTION_REG_COG_S</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>msp_risc_evenements_public_24h</Name>
      <Title>Événements de sécurité civile des dernières 24h</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=msp_risc_evenements_public_24h</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>msp_risc_evenements_public</Name>
      <Title>Événements de sécurité civile</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=msp_risc_evenements_public</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>vg_observation_inondation_16avril2023_mun_tout_v</Name>
      <Title>Municipalités touchées depuis le 14 avril 2023</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=vg_observation_inondation_16avril2023_mun_tout_v</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>vg_observation_v_inondation_16avril2023_wmst</Name>
      <Title>Événements d'inondation depuis le 14 avril 2023</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=vg_observation_v_inondation_16avril2023_wmst</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>vg_observation_v_mouv_terr_16avril2023_wmst</Name>
      <Title>Événements de mouvement de terrain depuis le 14 avril 2023</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=vg_observation_v_mouv_terr_16avril2023_wmst</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>msp_delaiss_crue_public_p</Name>
      <Title>Délaissés de crue arpentés (Public)</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=msp_delaiss_crue_public_p</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>risc_evenement_igo_public_debby2024</Name>
      <Title>Événements de sécurité civile (Debby)</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=risc_evenement_igo_public_debby2024</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>vg_observation_debby_2024_muns_touchees_public</Name>
      <Title>Municipalités touchées (Debby)</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=vg_observation_debby_2024_muns_touchees_public</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>vg_observation_inondation_2avril2020_mun_tout_v</Name>
      <Title>Municipalités touchées depuis le 2 avril 2020</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=vg_observation_inondation_2avril2020_mun_tout_v</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>vg_observation_v_inondation_2avril2020_wmst</Name>
      <Title>Événements d'inondation depuis le 2 avril 2020</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=vg_observation_v_inondation_2avril2020_wmst</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>vg_observation_v_inondation_embacle_wmst</Name>
      <Title>Historiques des embâcles répertoriés au MSP</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=vg_observation_v_inondation_embacle_wmst</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>vg_observation_v_autre_wmst</Name>
      <Title>Historique des événements de sécurité civile (Archives) (publique)</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=vg_observation_v_autre_wmst</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>MSP_CASERNE_PUBLIC</Name>
      <Title>Casernes de pompiers (version publique)</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=MSP_CASERNE_PUBLIC</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>MSP_BORNES_EVACUATION_PUBLIC_P</Name>
      <Title>Bornes SUMI et points de repères (version publique)</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=MSP_BORNES_EVACUATION_PUBLIC_P</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>MSP_911_GUICHET_AUTOMATIQUE_P</Name>
      <Title>Guichets automatiques</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=MSP_911_GUICHET_AUTOMATIQUE_P</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>MSP_911_CAISSE_POPULAIRE_P</Name>
      <Title>Caisses populaires Desjardins</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=MSP_911_CAISSE_POPULAIRE_P</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>MSP_911_CENTRE_EQUESTRE_P</Name>
      <Title>Centres équestres</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=MSP_911_CENTRE_EQUESTRE_P</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>MSP_911_BASEBALL_P</Name>
      <Title>Terrains de baseball</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=MSP_911_BASEBALL_P</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>msp_arena_2010_p</Name>
      <Title>Arénas</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=msp_arena_2010_p</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>MSP_911_PATINOIRE_EXTERIEURE_P</Name>
      <Title>Patinoires extérieures</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=MSP_911_PATINOIRE_EXTERIEURE_P</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>MTOUR_SKI_FOND_P</Name>
      <Title>Centres de ski de fond</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=MTOUR_SKI_FOND_P</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>MTOUR_PARC_AQUATIQUE_P</Name>
      <Title>Parcs aquatiques</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=MTOUR_PARC_AQUATIQUE_P</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>mtour_autodromes_p</Name>
      <Title>Autodromes et centres de karting</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=mtour_autodromes_p</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>MSP_911_SALLE_ENTRAINEMENT_P</Name>
      <Title>Salles d'entraînement</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=MSP_911_SALLE_ENTRAINEMENT_P</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>MSP_911_CENTRE_ESCALADE_P</Name>
      <Title>Centres d'escalade</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=MSP_911_CENTRE_ESCALADE_P</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>msp_911_football_p</Name>
      <Title>Terrains de football</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=msp_911_football_p</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>MTOUR_GLISSOIRE_P</Name>
      <Title>Centres de glisse hivernale</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=MTOUR_GLISSOIRE_P</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>MSP_911_SOCCER_P</Name>
      <Title>Terrains de soccer</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=MSP_911_SOCCER_P</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>MSP_911_ART_MARTIAUX_P</Name>
      <Title>Écoles et cours d'arts martiaux et d'autodéfense</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=MSP_911_ART_MARTIAUX_P</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>msp_911_circuit_entrainement_exterieur_p</Name>
      <Title>Circuits d'entrainements extérieur</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=msp_911_circuit_entrainement_exterieur_p</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>MSP_911_CURLING_P</Name>
      <Title>Clubs et pistes de curling</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=MSP_911_CURLING_P</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>msp_911_tennis_p</Name>
      <Title>Terrains de tennis</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=msp_911_tennis_p</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>MRN_SKI_ALPIN_P</Name>
      <Title>Centres de ski alpin</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=MRN_SKI_ALPIN_P</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>MSP_911_GOLF_P</Name>
      <Title>Terrains de golf</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=MSP_911_GOLF_P</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>msp_911_terrain_basket_p</Name>
      <Title>Terrains de basketball</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=msp_911_terrain_basket_p</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>MSP_911_GYMNASTIQUE_P</Name>
      <Title>Centres de gymnastique</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=MSP_911_GYMNASTIQUE_P</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>MTOUR_CENTRE_RECREATIF_P</Name>
      <Title>Centres récréatifs et sportifs</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=MTOUR_CENTRE_RECREATIF_P</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>msp_911_piste_athletisme_p</Name>
      <Title>Pistes d'athlétisme</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=msp_911_piste_athletisme_p</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>msp_911_petanque_p</Name>
      <Title>Terrains de pétanque</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=msp_911_petanque_p</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>DQ_MODULE_JEUX_P</Name>
      <Title>Modules de jeux</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=DQ_MODULE_JEUX_P</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>msp_911_volleyball_p</Name>
      <Title>Terrains de volleyball</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=msp_911_volleyball_p</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>MSP_911_PISCINE_PUBLIQUE_P</Name>
      <Title>Piscines publiques, jeux d'eau et centres aquatiques</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=MSP_911_PISCINE_PUBLIQUE_P</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>REQ_CONCESSIONNAIRE_P</Name>
      <Title>Concessionnaires automobiles</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=REQ_CONCESSIONNAIRE_P</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>MSP_911_STATION_SERVICE_P</Name>
      <Title>Dépanneurs et stations-service</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=MSP_911_STATION_SERVICE_P</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>REQ_GARAGE_P</Name>
      <Title>Garages et services de réparation</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=REQ_GARAGE_P</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>REQ_TAXI_P</Name>
      <Title>Entreprises de taxis</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=REQ_TAXI_P</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>hydro_qc_borne_recharge_p</Name>
      <Title>Bornes de recharge électrique</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=hydro_qc_borne_recharge_p</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>MSP_911_MAGASIN_PNEU_P</Name>
      <Title>Magasins de pneus</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=MSP_911_MAGASIN_PNEU_P</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>REQ_LAVE_AUTO_P</Name>
      <Title>Lave-autos</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=REQ_LAVE_AUTO_P</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>MAMH_CIMETIERE_P</Name>
      <Title>Cimetières</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=MAMH_CIMETIERE_P</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>MSP_911_LIEU_CULTE_P</Name>
      <Title>Église et lieux de culte</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=MSP_911_LIEU_CULTE_P</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>BANQ_BIBLIOTHEQUES_PUBLIQUES_P</Name>
      <Title>Bibliothèques</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=BANQ_BIBLIOTHEQUES_PUBLIQUES_P</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>MSP_911_INSTITUTION_MUSEALE_P</Name>
      <Title>Musées, galeries d'art et centres d'exposition</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=MSP_911_INSTITUTION_MUSEALE_P</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>REQ_CINEMA_P</Name>
      <Title>Cinémas</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=REQ_CINEMA_P</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>MTOUR_SALLE_SPECTACLE_P</Name>
      <Title>Salles de spectacle</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=MTOUR_SALLE_SPECTACLE_P</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>MTOUR_ZOO_AQUARIUM_P</Name>
      <Title>Zoos et aquariums</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=MTOUR_ZOO_AQUARIUM_P</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>RECYC_QUEBEC_ECOCENTRE_PT_DEPOT_MUN_P</Name>
      <Title>Écocentres et points de dépôt municipaux</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=RECYC_QUEBEC_ECOCENTRE_PT_DEPOT_MUN_P</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>REQ_APICULTURE_P</Name>
      <Title>Apicultures</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=REQ_APICULTURE_P</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>REQ_ELEVAGE_BETAIL_P</Name>
      <Title>Élevages du bétail et de la volaille </Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=REQ_ELEVAGE_BETAIL_P</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>REQ_ABATTOIR_P</Name>
      <Title>Abattoirs</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=REQ_ABATTOIR_P</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>REQ_GRANDE_CULTURE_P</Name>
      <Title>Grandes cultures</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=REQ_GRANDE_CULTURE_P</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>MRN_SITEI_P</Name>
      <Title>Sites industriels, commerciaux ou d'utilités publiques - Point</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=MRN_SITEI_P</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>MRN_SITEI_S</Name>
      <Title>Sites industriels, commerciaux ou d'utilités publiques - Surface</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=MRN_SITEI_S</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>CTOP_PARC_INDUSTRIEL_P</Name>
      <Title>Parcs industriels (point)</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=CTOP_PARC_INDUSTRIEL_P</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>MRN_SITEI_L</Name>
      <Title>Sites industriels, commerciaux ou d'utilités publiques - Ligne</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=MRN_SITEI_L</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>MSP_DIRECTION_REG_COG_P_V</Name>
      <Title>Bureaux régionaux de la sécurité civile et de la sécurité incendie</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=MSP_DIRECTION_REG_COG_P_V</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>CAN_BATIM_FEDERAL_P</Name>
      <Title>Bâtiments de Travaux Publics Canada</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=CAN_BATIM_FEDERAL_P</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>SAAQ_BUREAU_ADMIN_P</Name>
      <Title>Bureaux administratifs (SAAQ)</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=SAAQ_BUREAU_ADMIN_P</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>CTOP_BUREAU_POSTE_P</Name>
      <Title>Bureaux de poste</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=CTOP_BUREAU_POSTE_P</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>MSG_SERVICES_GOUVERNEMENTAUX</Name>
      <Title>Services gouvernementaux provinciaux</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=MSG_SERVICES_GOUVERNEMENTAUX</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>MSP_911_COURS_CONDUITE_P</Name>
      <Title>Écoles de conduite</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=MSP_911_COURS_CONDUITE_P</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>MSP_911_ECOLE_COIFFURE_P</Name>
      <Title>Écoles de coiffure et d'esthétique</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=MSP_911_ECOLE_COIFFURE_P</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>MSP_911_ECOLE_LANGUE_P</Name>
      <Title>Écoles et cours de langues</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=MSP_911_ECOLE_LANGUE_P</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>MSP_911_COURS_ALPHABETISATION_P</Name>
      <Title>Cours d'alphabétisation</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=MSP_911_COURS_ALPHABETISATION_P</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>MONTREAL_FONTAINE_BOIRE</Name>
      <Title>Fontaines à boire</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=MONTREAL_FONTAINE_BOIRE</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>REG_ADM_ESPACES_VERTS_S</Name>
      <Title>REG_ADM_ESPACES_VERTS_S</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=REG_ADM_ESPACES_VERTS_S</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>msp_911_parcs_jardins_collectifs_p</Name>
      <Title>Parcs et jardins publics</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=msp_911_parcs_jardins_collectifs_p</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>REQ_VETEMENT_P</Name>
      <Title>Boutiques de vêtements</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=REQ_VETEMENT_P</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>MCC_V_LIBRAIRIE_P</Name>
      <Title>Librairies</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=MCC_V_LIBRAIRIE_P</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>MTOUR_CENTRE_COMMERCIAL_P</Name>
      <Title>Centres commerciaux</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=MTOUR_CENTRE_COMMERCIAL_P</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>REQ_QUINCAILLERIE_P</Name>
      <Title>Quincailleries</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=REQ_QUINCAILLERIE_P</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>MSP_PORTE_BATISSE_P</Name>
      <Title>Portes de centres commerciaux</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=MSP_PORTE_BATISSE_P</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>MTOUR_SERVICE_LOCATION_P</Name>
      <Title>Entreprises de location d'équipement de sport</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=MTOUR_SERVICE_LOCATION_P</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>MTOUR_COMPAGNIE_P</Name>
      <Title>Compagnies de transport et agences de voyage</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=MTOUR_COMPAGNIE_P</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>MSP_911_ANIMALERIE_P</Name>
      <Title>Animaleries</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=MSP_911_ANIMALERIE_P</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>REQ_FLEURISTE_P</Name>
      <Title>Fleuristes et centres de jardinage</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=REQ_FLEURISTE_P</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>SQDC_SUCURSALE_P</Name>
      <Title>Société québécoise du cannabis (SQDC)</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=SQDC_SUCURSALE_P</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>SAQ_SUCURSALE_P</Name>
      <Title>Société des alcools du Québec (SAQ)</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=SAQ_SUCURSALE_P</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>REQ_BIJOUTERIE_P</Name>
      <Title>Bijouteries</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=REQ_BIJOUTERIE_P</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>SQ_TERRITOIRE_AUTOROUTIER</Name>
      <Title>SQ_TERRITOIRE_AUTOROUTIER</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-1100000 -23500</ows:LowerCorner>
        <ows:UpperCorner>1100000 2253500</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=SQ_TERRITOIRE_AUTOROUTIER</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>SQ_TERRITOIRE_CSMRC</Name>
      <Title>SQ_TERRITOIRE_CSMRC</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-1100000 -23500</ows:LowerCorner>
        <ows:UpperCorner>1100000 2253500</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=SQ_TERRITOIRE_CSMRC</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>SQ_TERRITOIRE_POSTES_MRC</Name>
      <Title>SQ_TERRITOIRE_POSTES_MRC</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-1100000 -23500</ows:LowerCorner>
        <ows:UpperCorner>1100000 2253500</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=SQ_TERRITOIRE_POSTES_MRC</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>SQ_TERRITOIRE_POSTES_AUX</Name>
      <Title>SQ_TERRITOIRE_POSTES_AUX</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-1100000 -23500</ows:LowerCorner>
        <ows:UpperCorner>1100000 2253500</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=SQ_TERRITOIRE_POSTES_AUX</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>MSP_DESSERTE_AUTOCHTONE_S</Name>
      <Title>Couverture de la police autochtone</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=MSP_DESSERTE_AUTOCHTONE_S</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>msp_911_couverture_police_municipale_s</Name>
      <Title>msp_911_couverture_police_municipale_s</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=msp_911_couverture_police_municipale_s</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>MSSS_ETABL_SANTE_P</Name>
      <Title>Établissements de santé</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=MSSS_ETABL_SANTE_P</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>REQ_CENTRE_TRANSITION_P</Name>
      <Title>Centres de transition</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=REQ_CENTRE_TRANSITION_P</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>MSP_911_OPTOMETRISTE_P</Name>
      <Title>Optométristes</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=MSP_911_OPTOMETRISTE_P</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>REQ_PHARMACIE_P</Name>
      <Title>Pharmacies</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=REQ_PHARMACIE_P</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>MSSS_INSTALLATIONS_P</Name>
      <Title>Installations de soins de santé</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=MSSS_INSTALLATIONS_P</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>REQ_CENTRE_READAPTATION_P</Name>
      <Title>Centres de réadaptation</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=REQ_CENTRE_READAPTATION_P</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>MSSS_SGS_P</Name>
      <Title>Soins généraux et spécialisés</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=MSSS_SGS_P</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>MSSS_HSLD_P</Name>
      <Title>Centres d'hébergement de soins de longue durée (CHSLD)</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=MSSS_HSLD_P</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>REQ_CABINET_MEDECIN_P</Name>
      <Title>Cabinets de médecins</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=REQ_CABINET_MEDECIN_P</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>MSSS_URGENCE_24h</Name>
      <Title>Hôpitaux et centres d'urgence 24/7</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=MSSS_URGENCE_24h</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>REQ_CABINET_DENTISTE_P</Name>
      <Title>Cabinets de dentistes</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=REQ_CABINET_DENTISTE_P</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>msp_v_etabl_det_fed_p</Name>
      <Title>Établissements de détention fédéraux</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=msp_v_etabl_det_fed_p</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>MSP_ETABL_DET_PROV_P</Name>
      <Title>Établissements de détention provinciaux</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=MSP_ETABL_DET_PROV_P</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>CTOP_PAROISSE_P</Name>
      <Title>Paroisses</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=CTOP_PAROISSE_P</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>MSP_911_STATIONNEMENT_S</Name>
      <Title>Périmètre de stationnement public</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=MSP_911_STATIONNEMENT_S</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>MSP_911_STATIONNEMENT_P</Name>
      <Title>Types de stationnement public</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/complet.fcgi?request=GetMetadata&amp;layer=MSP_911_STATIONNEMENT_P</MetadataURL>
    </FeatureType>
  </FeatureTypeList>
  <ogc:Filter_Capabilities>
    <ogc:Spatial_Capabilities>
      <ogc:GeometryOperands>
        <ogc:GeometryOperand>gml:Point</ogc:GeometryOperand>
        <ogc:GeometryOperand>gml:LineString</ogc:GeometryOperand>
        <ogc:GeometryOperand>gml:Polygon</ogc:GeometryOperand>
        <ogc:GeometryOperand>gml:Envelope</ogc:GeometryOperand>
      </ogc:GeometryOperands>
      <ogc:SpatialOperators>
        <ogc:SpatialOperator name="Equals"/>
        <ogc:SpatialOperator name="Disjoint"/>
        <ogc:SpatialOperator name="Touches"/>
        <ogc:SpatialOperator name="Within"/>
        <ogc:SpatialOperator name="Overlaps"/>
        <ogc:SpatialOperator name="Crosses"/>
        <ogc:SpatialOperator name="Intersects"/>
        <ogc:SpatialOperator name="Contains"/>
        <ogc:SpatialOperator name="DWithin"/>
        <ogc:SpatialOperator name="Beyond"/>
        <ogc:SpatialOperator name="BBOX"/>
      </ogc:SpatialOperators>
    </ogc:Spatial_Capabilities>
    <ogc:Scalar_Capabilities>
      <ogc:LogicalOperators/>
      <ogc:ComparisonOperators>
        <ogc:ComparisonOperator>LessThan</ogc:ComparisonOperator>
        <ogc:ComparisonOperator>GreaterThan</ogc:ComparisonOperator>
        <ogc:ComparisonOperator>LessThanEqualTo</ogc:ComparisonOperator>
        <ogc:ComparisonOperator>GreaterThanEqualTo</ogc:ComparisonOperator>
        <ogc:ComparisonOperator>EqualTo</ogc:ComparisonOperator>
        <ogc:ComparisonOperator>NotEqualTo</ogc:ComparisonOperator>
        <ogc:ComparisonOperator>Like</ogc:ComparisonOperator>
        <ogc:ComparisonOperator>Between</ogc:ComparisonOperator>
      </ogc:ComparisonOperators>
    </ogc:Scalar_Capabilities>
    <ogc:Id_Capabilities>
      <ogc:EID/>
      <ogc:FID/>
    </ogc:Id_Capabilities>
  </ogc:Filter_Capabilities>
</wfs:WFS_Capabilities>