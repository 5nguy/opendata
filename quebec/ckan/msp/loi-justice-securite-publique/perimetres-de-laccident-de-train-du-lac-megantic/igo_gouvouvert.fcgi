<?xml version="1.0" encoding="UTF-8"?>
<wfs:WFS_Capabilities xmlns:gml="http://www.opengis.net/gml" xmlns:wfs="http://www.opengis.net/wfs" xmlns:ows="http://www.opengis.net/ows" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:ogc="http://www.opengis.net/ogc" xmlns="http://www.opengis.net/wfs" version="1.1.0" xsi:schemaLocation="http://www.opengis.net/wfs http://schemas.opengis.net/wfs/1.1.0/wfs.xsd">
  <ows:ServiceIdentification>
    <ows:Title>Service web WFS du MSP</ows:Title>
    <ows:Abstract>Gouvernement du Qc - Donnees ouvertes</ows:Abstract>
    <ows:Keywords>
      <ows:Keyword>Gouvernement du Qc - Donnees ouvertes</ows:Keyword>
    </ows:Keywords>
    <ows:ServiceType codeSpace="OGC">OGC WFS</ows:ServiceType>
    <ows:ServiceTypeVersion>1.1.0</ows:ServiceTypeVersion>
    <ows:Fees/>
    <!--WARNING: Optional metadata "ows_fees" was missing for ows:Fees-->
    <ows:AccessConstraints/>
    <!--WARNING: Optional metadata "ows_accessconstraints" was missing for ows:AccessConstraints-->
  </ows:ServiceIdentification>
  <ows:ServiceProvider>
    <ows:ProviderName/>
    <!--WARNING: Mandatory metadata "ows_contactorganization" was missing for ows:ProviderName-->
    <ows:ProviderSite xlink:type="simple" xlink:href=""/>
    <!--WARNING: Optional metadata "ows_service_onlineresource" was missing for ows:ProviderSite/@xlink:href-->
    <ows:ServiceContact>
      <ows:IndividualName/>
      <!--WARNING: Optional metadata "ows_contactperson" was missing for ows:IndividualName-->
      <ows:PositionName/>
      <!--WARNING: Optional metadata "ows_contactposition" was missing for ows:PositionName-->
      <ows:ContactInfo>
        <ows:Phone>
          <ows:Voice/>
          <!--WARNING: Optional metadata "ows_contactvoicetelephone" was missing for ows:Voice-->
          <ows:Facsimile/>
          <!--WARNING: Optional metadata "ows_contactfacsimiletelephone" was missing for ows:Facsimile-->
        </ows:Phone>
        <ows:Address>
          <ows:DeliveryPoint/>
          <!--WARNING: Optional metadata "ows_address" was missing for ows:DeliveryPoint-->
          <ows:City/>
          <!--WARNING: Optional metadata "ows_city" was missing for ows:City-->
          <ows:AdministrativeArea/>
          <!--WARNING: Optional metadata "ows_stateorprovince" was missing for ows:AdministrativeArea-->
          <ows:PostalCode/>
          <!--WARNING: Optional metadata "ows_postcode" was missing for ows:PostalCode-->
          <ows:Country/>
          <!--WARNING: Optional metadata "ows_country" was missing for ows:Country-->
          <ows:ElectronicMailAddress/>
          <!--WARNING: Optional metadata "ows_contactelectronicmailaddress" was missing for ows:ElectronicMailAddress-->
        </ows:Address>
        <ows:OnlineResource xlink:type="simple" xlink:href=""/>
        <!--WARNING: Optional metadata "ows_service_onlineresource" was missing for ows:OnlineResource/@xlink:href-->
        <ows:HoursOfService/>
        <!--WARNING: Optional metadata "ows_hoursofservice" was missing for ows:HoursOfService-->
        <ows:ContactInstructions/>
        <!--WARNING: Optional metadata "ows_contactinstructions" was missing for ows:ContactInstructions-->
      </ows:ContactInfo>
      <ows:Role/>
      <!--WARNING: Optional metadata "ows_role" was missing for ows:Role-->
    </ows:ServiceContact>
  </ows:ServiceProvider>
  <ows:OperationsMetadata>
    <ows:Operation name="GetCapabilities">
      <ows:DCP>
        <ows:HTTP>
          <ows:Get xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?"/>
          <ows:Post xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?"/>
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
          <ows:Get xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?"/>
          <ows:Post xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?"/>
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
          <ows:Get xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?"/>
          <ows:Post xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?"/>
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
        <ows:Value>application/json; subtype=geojson; charset=iso-8859-1</ows:Value>
        <ows:Value>application/json; subtype=geojson; charset=utf-8</ows:Value>
      </ows:Parameter>
    </ows:Operation>
  </ows:OperationsMetadata>
  <FeatureTypeList>
    <Operations>
      <Operation>Query</Operation>
    </Operations>
    <FeatureType>
      <Name>msp_vigilance_crue_publique_v</Name>
      <Title>msp_vigilance_crue_publique_v</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson; charset=iso-8859-1</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=msp_vigilance_crue_publique_v</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>msp_vigilance_crue_publique_v_type</Name>
      <Title>msp_vigilance_crue_publique_v_type</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson; charset=iso-8859-1</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=msp_vigilance_crue_publique_v_type</MetadataURL>
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
        <Format>application/json; subtype=geojson; charset=iso-8859-1</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-180 -90</ows:LowerCorner>
        <ows:UpperCorner>180 90</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=masas_naad_adna_s_public</MetadataURL>
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
        <Format>application/json; subtype=geojson; charset=iso-8859-1</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-81.25227203495 44.5173638433673</ows:LowerCorner>
        <ows:UpperCorner>-56.4379534536801 54.4343758949158</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=MSP_DESSERTE_MUN_911</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>MCC_V_SITE_PATRIMONIAL_NATIONAL_S</Name>
      <Title>MCC_V_SITE_PATRIMONIAL_NATIONAL_S</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=MCC_V_SITE_PATRIMONIAL_NATIONAL_S</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>MCC_V_SITE_PATRIMONIAL_DECLARE_S</Name>
      <Title>MCC_V_SITE_PATRIMONIAL_DECLARE_S</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=MCC_V_SITE_PATRIMONIAL_DECLARE_S</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>MCC_V_SITE_PATRIMONIAL_S</Name>
      <Title>MCC_V_SITE_PATRIMONIAL_S</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-80.30428886891 44.6379873581378</ows:LowerCorner>
        <ows:UpperCorner>-57.1099454015106 51.9950621949069</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=MCC_V_SITE_PATRIMONIAL_S</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>MCC_V_SITE_PATRIMONIAL_CITE_P</Name>
      <Title>MCC_V_SITE_PATRIMONIAL_CITE_P</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=MCC_V_SITE_PATRIMONIAL_CITE_P</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>MCC_V_IP_TERRAIN_PROTEGE_S</Name>
      <Title>MCC_V_IP_TERRAIN_PROTEGE_S</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=MCC_V_IP_TERRAIN_PROTEGE_S</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>MCC_V_IP_TERRAIN_NON_PROTEGE_P</Name>
      <Title>MCC_V_IP_TERRAIN_NON_PROTEGE_P</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=MCC_V_IP_TERRAIN_NON_PROTEGE_P</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>MCC_V_IP_CITE_P</Name>
      <Title>MCC_V_IP_CITE_P</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>application/json; subtype=geojson; charset=iso-8859-1</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=MCC_V_IP_CITE_P</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>adn_station_max_public_v</Name>
      <Title>adn_station_max_public_v</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson; charset=iso-8859-1</Format>
        <Format>application/json; subtype=geojson; charset=utf-8</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=adn_station_max_public_v</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>adn_bassin_n1_public_v</Name>
      <Title>adn_bassin_n1_public_v</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson; charset=iso-8859-1</Format>
        <Format>application/json; subtype=geojson; charset=utf-8</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=adn_bassin_n1_public_v</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>msp_echelle_limnimetrique</Name>
      <Title>msp_echelle_limnimetrique</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson; charset=iso-8859-1</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-80.1175911614471 44.5978934742546</ows:LowerCorner>
        <ows:UpperCorner>-57.456557 52.014104910082</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=msp_echelle_limnimetrique</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>vg_observation_v_inondation_embacle_wmst</Name>
      <Title>vg_observation_v_inondation_embacle_wmst</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson; charset=iso-8859-1</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=vg_observation_v_inondation_embacle_wmst</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>vg_observation_v_autre_wmst</Name>
      <Title>vg_observation_v_autre_wmst</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson; charset=iso-8859-1</Format>
        <Format>application/json; subtype=geojson; charset=utf-8</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-84.2154316434601 44.5332059537825</ows:LowerCorner>
        <ows:UpperCorner>-53.5537625672167 62.703315998665</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=vg_observation_v_autre_wmst</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>vg_observation_inondation_23avril2017_mun_tout_v</Name>
      <Title>vg_observation_inondation_23avril2017_mun_tout_v</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson; charset=iso-8859-1</Format>
        <Format>application/json; subtype=geojson; charset=utf-8</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-78.3780137448211 44.8934115661758</ows:LowerCorner>
        <ows:UpperCorner>-57.3266091645329 52.1296597884099</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=vg_observation_inondation_23avril2017_mun_tout_v</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>vg_observation_v_inondation23avril2017_wmst</Name>
      <Title>vg_observation_v_inondation23avril2017_wmst</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson; charset=iso-8859-1</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-77.9018552373754 45.0333676775797</ows:LowerCorner>
        <ows:UpperCorner>-61.3676125103984 50.4459581856235</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=vg_observation_v_inondation23avril2017_wmst</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>vg_observation_glissement_23avril2017_tout_v</Name>
      <Title>vg_observation_glissement_23avril2017_tout_v</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson; charset=iso-8859-1</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-77.4170950336469 45.0702006959364</ows:LowerCorner>
        <ows:UpperCorner>-64.5223506516451 50.172301088562</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=vg_observation_glissement_23avril2017_tout_v</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>MEGANTIC_PERI_VERT</Name>
      <Title>MEGANTIC_PERI_VERT</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=MEGANTIC_PERI_VERT</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>MEGANTIC_PERI_JAUNE</Name>
      <Title>MEGANTIC_PERI_JAUNE</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=MEGANTIC_PERI_JAUNE</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>MEGANTIC_PERI_ROUGE</Name>
      <Title>MEGANTIC_PERI_ROUGE</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=MEGANTIC_PERI_ROUGE</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>MSP_DIRECTION_REG_COG_P_V</Name>
      <Title>MSP_DIRECTION_REG_COG_P_V</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson; charset=iso-8859-1</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=MSP_DIRECTION_REG_COG_P_V</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>MSP_DIRECTION_REG_COG_S</Name>
      <Title>MSP_DIRECTION_REG_COG_S</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson; charset=iso-8859-1</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=MSP_DIRECTION_REG_COG_S</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>MSP_ADM_ALERTE_MRC_GENERAL_S</Name>
      <Title>MSP_ADM_ALERTE_MRC_GENERAL_S</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson; charset=iso-8859-1</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-79.7712584626078 44.9868740906179</ows:LowerCorner>
        <ows:UpperCorner>-56.9282881037645 62.5863794915283</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=MSP_ADM_ALERTE_MRC_GENERAL_S</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>MSP_ADM_ALERTE_MUN_PRECIS_S</Name>
      <Title>MSP_ADM_ALERTE_MUN_PRECIS_S</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson; charset=iso-8859-1</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-79.7681935837717 44.9891568594842</ows:LowerCorner>
        <ows:UpperCorner>-56.9312730374572 62.5845484113214</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=MSP_ADM_ALERTE_MUN_PRECIS_S</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>CASERNE</Name>
      <Title>CASERNE</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson; charset=iso-8859-1</Format>
        <Format>application/json; subtype=geojson; charset=utf-8</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-90.2177536697006 42.8632179272892</ows:LowerCorner>
        <ows:UpperCorner>-46.7822463302994 64.28545575643</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=CASERNE</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>MSP_BORNE_INC_MUN_P</Name>
      <Title>MSP_BORNE_INC_MUN_P</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
        <Format>SHP</Format>
        <Format>text/csv; charset=utf-8</Format>
        <Format>application/json; subtype=geojson; charset=iso-8859-1</Format>
        <Format>application/json; subtype=geojson; charset=utf-8</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>-79.961946185209 44.5672430827496</ows:LowerCorner>
        <ows:UpperCorner>-66.8145256118489 50.0811400400923</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=MSP_BORNE_INC_MUN_P</MetadataURL>
    </FeatureType>
    <FeatureType>
      <Name>feux2023_zones_interdit_circuler</Name>
      <Title>feux2023_zones_interdit_circuler</Title>
      <DefaultSRS>urn:ogc:def:crs:EPSG::32198</DefaultSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::4326</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3798</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::3857</OtherSRS>
      <OtherSRS>urn:ogc:def:crs:EPSG::900913</OtherSRS>
      <OutputFormats>
        <Format>text/xml; subtype=gml/3.1.1</Format>
      </OutputFormats>
      <ows:WGS84BoundingBox dimensions="2">
        <ows:LowerCorner>0 0</ows:LowerCorner>
        <ows:UpperCorner>0 0</ows:UpperCorner>
      </ows:WGS84BoundingBox>
      <MetadataURL format="text/xml" type="TC211">https://geoegl.msp.gouv.qc.ca/ws/igo_gouvouvert.fcgi?request=GetMetadata&amp;layer=feux2023_zones_interdit_circuler</MetadataURL>
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
