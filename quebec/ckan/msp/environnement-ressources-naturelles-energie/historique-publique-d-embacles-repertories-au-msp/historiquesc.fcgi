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
          <ows:Get xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?"/>
          <ows:Post xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?"/>
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
          <ows:Get xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?"/>
          <ows:Post xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?"/>
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
          <ows:Get xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?"/>
          <ows:Post xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?"/>
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
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=msp_risc_evenements_public_24h</MetadataURL>
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
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=msp_risc_evenements_public</MetadataURL>
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
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=msp_delaiss_crue_public_p</MetadataURL>
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
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=risc_evenement_igo_public_debby2024</MetadataURL>
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
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=vg_observation_debby_2024_muns_touchees_public</MetadataURL>
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
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=vg_observation_inondation_2avril2020_mun_tout_v</MetadataURL>
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
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=vg_observation_v_inondation_2avril2020_wmst</MetadataURL>
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
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=vg_observation_v_inondation_embacle_wmst</MetadataURL>
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
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/apis/wss/historiquesc.fcgi?request=GetMetadata&amp;layer=vg_observation_v_autre_wmst</MetadataURL>
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