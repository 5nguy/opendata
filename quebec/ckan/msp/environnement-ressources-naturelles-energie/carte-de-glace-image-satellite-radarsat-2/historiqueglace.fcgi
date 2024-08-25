<?xml version="1.0" encoding="UTF-8" standalone="yes"?>
<WCS_Capabilities version="1.0.0" updateSequence="0" xmlns="http://www.opengis.net/wcs" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:gml="http://www.opengis.net/gml" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.opengis.net/wcs http://schemas.opengis.net/wcs/1.0.0/wcsCapabilities.xsd">
  <Service>
    <name>MapServer WCS</name>
    <keywords>
      <keyword>MSP</keyword>
    </keywords>
    <responsibleParty>
      <individualName>Équipe géomatique</individualName>
      <organisationName>Ministère de la sécurité publique</organisationName>
      <contactInfo>
        <address>
          <electronicMailAddress>geomsp@msp.gouv.qc.ca</electronicMailAddress>
        </address>
      </contactInfo>
    </responsibleParty>
    <fees>none</fees>
    <accessConstraints>
    L'utilisation des données de ce service WMS est sujette aux conditions d'utilisation stipulées par l'entente ou l'accord de licence entre le Ministère de la sécurité publique du Québec (MSP) et son propriétaire.  Ce service WMS est diffusé selon les informations fournies par le propriétaire et n'a aucune valeur légale. Le Ministère de la sécurité publique n'est pas responsable des erreurs qui pourraient s'y retrouver.
  </accessConstraints>
  </Service>
  <Capability>
    <Request>
      <GetCapabilities>
        <DCPType>
          <HTTP>
            <Get>
              <OnlineResource xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?"/>
            </Get>
          </HTTP>
        </DCPType>
        <DCPType>
          <HTTP>
            <Post>
              <OnlineResource xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?"/>
            </Post>
          </HTTP>
        </DCPType>
      </GetCapabilities>
    </Request>
    <Exception>
      <Format>application/vnd.ogc.se_xml</Format>
    </Exception>
  </Capability>
  <ContentMetadata>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220325_BECANCOUR_S1"/>
      <name>20220325_BECANCOUR_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.6090928164009 45.4688779398953</gml:pos>
        <gml:pos>-71.4420528587653 46.8048226147754</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220313_BECANCOUR_S1"/>
      <name>20220313_BECANCOUR_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.6090928164009 45.4688779398953</gml:pos>
        <gml:pos>-71.4420528587653 46.8048226147754</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220217_BECANCOUR_S1"/>
      <name>20220217_BECANCOUR_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.6090928164009 45.4688779398953</gml:pos>
        <gml:pos>-71.4420528587653 46.8048226147754</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220205_BECANCOUR_S1"/>
      <name>20220205_BECANCOUR_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.6090928164009 45.4688779398953</gml:pos>
        <gml:pos>-71.4420528587653 46.8048226147754</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220124_BECANCOUR_S1"/>
      <name>20220124_BECANCOUR_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.6090928164009 45.4688779398953</gml:pos>
        <gml:pos>-71.4420528587653 46.8048226147754</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220112_BECANCOUR_S1"/>
      <name>20220112_BECANCOUR_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.6090928164009 45.4688779398953</gml:pos>
        <gml:pos>-71.4420528587653 46.8048226147754</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20211231_BECANCOUR_S1"/>
      <name>20211231_BECANCOUR_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.6090928164009 45.4688779398953</gml:pos>
        <gml:pos>-71.4420528587653 46.8048226147754</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210318_BECANCOUR_S1"/>
      <name>20210318_BECANCOUR_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.6090928164009 45.4688779398953</gml:pos>
        <gml:pos>-71.4420528587653 46.8048226147754</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210306_BECANCOUR_S1"/>
      <name>20210306_BECANCOUR_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.6090928164009 45.4688779398953</gml:pos>
        <gml:pos>-71.4420528587653 46.8048226147754</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210222_BECANCOUR_S1"/>
      <name>20210222_BECANCOUR_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.6090928164009 45.4688779398953</gml:pos>
        <gml:pos>-71.4420528587653 46.8048226147754</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210210_BECANCOUR_S1"/>
      <name>20210210_BECANCOUR_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.6090928164009 45.4688779398953</gml:pos>
        <gml:pos>-71.4420528587653 46.8048226147754</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210129_BECANCOUR_S1"/>
      <name>20210129_BECANCOUR_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.6090928164009 45.4688779398953</gml:pos>
        <gml:pos>-71.4420528587653 46.8048226147754</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210117_BECANCOUR_S1"/>
      <name>20210117_BECANCOUR_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.6090928164009 45.4688779398953</gml:pos>
        <gml:pos>-71.4420528587653 46.8048226147754</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220419_BONAVENTURE_S1"/>
      <name>20220419_BONAVENTURE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-66.2383365353555 47.6516695928692</gml:pos>
        <gml:pos>-64.2330405512553 48.4099662118703</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220407_BONAVENTURE_S1"/>
      <name>20220407_BONAVENTURE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-66.2383365353555 47.6516695928692</gml:pos>
        <gml:pos>-64.2330405512553 48.4099662118703</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220326_BONAVENTURE_S1"/>
      <name>20220326_BONAVENTURE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-66.2383365353555 47.6516695928692</gml:pos>
        <gml:pos>-64.2330405512553 48.4099662118703</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220314_BONAVENTURE_S1"/>
      <name>20220314_BONAVENTURE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-66.2383365353555 47.6516695928692</gml:pos>
        <gml:pos>-64.2330405512553 48.4099662118703</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210319_BONAVENTURE_S1"/>
      <name>20210319_BONAVENTURE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-66.2236133501419 47.9953581082675</gml:pos>
        <gml:pos>-65.2493551974976 48.4099625925042</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220406_CHAUDIERE_S1"/>
      <name>20220406_CHAUDIERE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.5794138131475 45.6911406727393</gml:pos>
        <gml:pos>-70.415768033367 46.9568147029257</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220325_CHAUDIERE_S1"/>
      <name>20220325_CHAUDIERE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.5794138131475 45.6911406727393</gml:pos>
        <gml:pos>-70.415768033367 46.9568147029257</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220313_CHAUDIERE_S1"/>
      <name>20220313_CHAUDIERE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.5794138131475 45.6911406727393</gml:pos>
        <gml:pos>-70.415768033367 46.9568147029257</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220217_CHAUDIERE_S1"/>
      <name>20220217_CHAUDIERE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.5794138131475 45.6911406727393</gml:pos>
        <gml:pos>-70.415768033367 46.9568147029257</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220205_CHAUDIERE_S1"/>
      <name>20220205_CHAUDIERE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.5794138131475 45.6911406727393</gml:pos>
        <gml:pos>-70.415768033367 46.9568147029257</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220124_CHAUDIERE_S1"/>
      <name>20220124_CHAUDIERE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.5794138131475 45.6911406727393</gml:pos>
        <gml:pos>-70.415768033367 46.9568147029257</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220112_CHAUDIERE_S1"/>
      <name>20220112_CHAUDIERE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.5794138131475 45.6911406727393</gml:pos>
        <gml:pos>-70.415768033367 46.9568147029257</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20211231_CHAUDIERE_S1"/>
      <name>20211231_CHAUDIERE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.5794138131475 45.6911406727393</gml:pos>
        <gml:pos>-70.415768033367 46.9568147029257</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210318_CHAUDIERE_S1"/>
      <name>20210318_CHAUDIERE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.5794138131475 45.6911406727393</gml:pos>
        <gml:pos>-70.415768033367 46.9568147029257</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210306_CHAUDIERE_S1"/>
      <name>20210306_CHAUDIERE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.5794138131475 45.6911406727393</gml:pos>
        <gml:pos>-70.415768033367 46.9568147029257</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210222_CHAUDIERE_S1"/>
      <name>20210222_CHAUDIERE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.5794138131475 45.6911406727393</gml:pos>
        <gml:pos>-70.415768033367 46.9568147029257</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210210_CHAUDIERE_S1"/>
      <name>20210210_CHAUDIERE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.5794138131475 45.6911406727393</gml:pos>
        <gml:pos>-70.415768033367 46.9568147029257</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210129_CHAUDIERE_S1"/>
      <name>20210129_CHAUDIERE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.5794138131475 45.6911406727393</gml:pos>
        <gml:pos>-70.415768033367 46.9568147029257</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210117_CHAUDIERE_S1"/>
      <name>20210117_CHAUDIERE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.5794138131475 45.6911406727393</gml:pos>
        <gml:pos>-70.415768033367 46.9568147029257</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220408_MATANE_S1"/>
      <name>20220408_MATANE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.4278850050651 47.7551603263604</gml:pos>
        <gml:pos>-66.3912936118013 48.2242297906914</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220327_MATANE_S1"/>
      <name>20220327_MATANE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.8089787788585 48.4740655773602</gml:pos>
        <gml:pos>-66.8479347586611 49.1196014562819</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220315_MATANE_S1"/>
      <name>20220315_MATANE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.8089787788585 48.4740655773602</gml:pos>
        <gml:pos>-66.8479347586611 49.1196014562819</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220303_MATANE_S1"/>
      <name>20220303_MATANE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.8089787788585 48.4740655773602</gml:pos>
        <gml:pos>-66.8479347586611 49.1196014562819</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210401_MATANE_S1"/>
      <name>20210401_MATANE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.8089787788585 48.4740655773602</gml:pos>
        <gml:pos>-66.8479347586611 49.1196014562819</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210321_MATANE_S1"/>
      <name>20210321_MATANE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.8089787788585 48.4740655773602</gml:pos>
        <gml:pos>-66.8479347586611 49.1196014562819</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200418_MATANE_S1"/>
      <name>20200418_MATANE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.8089787788585 48.4740655773602</gml:pos>
        <gml:pos>-66.8479347586611 49.1196014562819</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200414_MATANE_R2"/>
      <name>20200414_MATANE_R2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.6485390813664 48.5904720056642</gml:pos>
        <gml:pos>-67.2683076534714 48.9131966969812</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200408_MATANE_R2"/>
      <name>20200408_MATANE_R2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.7641284041476 48.6766403160569</gml:pos>
        <gml:pos>-67.4125318736649 48.8950350455391</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200406_MATANE_S1"/>
      <name>20200406_MATANE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.8089787788585 48.4740655773602</gml:pos>
        <gml:pos>-66.8479347586611 49.1196014562819</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200325_MATANE_S1"/>
      <name>20200325_MATANE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.8089787788585 48.4740655773602</gml:pos>
        <gml:pos>-66.8479347586611 49.1196014562819</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200321_MATANE_R2"/>
      <name>20200321_MATANE_R2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.6618854305681 48.5841002693825</gml:pos>
        <gml:pos>-67.266688187421 48.957942437559</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200318_MATANE_R2"/>
      <name>20200318_MATANE_R2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.7361252028811 48.5623448919755</gml:pos>
        <gml:pos>-67.3186221857695 48.9438588250574</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200313_MATANE_S1"/>
      <name>20200313_MATANE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.8089787788585 48.4740655773602</gml:pos>
        <gml:pos>-66.8479347586611 49.1196014562819</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220408_MATAPEDIA_S1"/>
      <name>20220408_MATAPEDIA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.8089787788585 48.4740655773602</gml:pos>
        <gml:pos>-66.8479347586611 49.1196014562819</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210401_MATAPEDIA_S1"/>
      <name>20210401_MATAPEDIA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.4278850050651 47.7551603263604</gml:pos>
        <gml:pos>-66.3912936118013 48.2242297906914</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210321_MATAPEDIA_S1"/>
      <name>20210321_MATAPEDIA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.4278850050651 47.7551603263604</gml:pos>
        <gml:pos>-66.3912936118013 48.2242297906914</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200414_MATAPEDIA_R2"/>
      <name>20200414_MATAPEDIA_R2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.4415096893463 47.7228660648383</gml:pos>
        <gml:pos>-66.5835958807935 48.276207320955</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200404_MATAPEDIA_R2"/>
      <name>20200404_MATAPEDIA_R2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.4958148153423 47.7164690754954</gml:pos>
        <gml:pos>-66.6209241757084 48.2706466172783</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200328_MATAPEDIA_R2"/>
      <name>20200328_MATAPEDIA_R2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.6144509364759 47.7707196176596</gml:pos>
        <gml:pos>-66.7674436069495 48.2778182046683</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200321_MATAPEDIA_R2"/>
      <name>20200321_MATAPEDIA_R2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.6212058374139 47.7718615828896</gml:pos>
        <gml:pos>-66.7649902557718 48.2733047430786</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200318_MATAPEDIA_R2"/>
      <name>20200318_MATAPEDIA_R2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.5398557576868 47.771955834583</gml:pos>
        <gml:pos>-66.6739788618452 48.2908742170617</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220330_MONTREAL_S1"/>
      <name>20220330_MONTREAL_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.6867834263541 45.0358422058121</gml:pos>
        <gml:pos>-73.3017051911075 46.5352647560344</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220318_MONTREAL_S1"/>
      <name>20220318_MONTREAL_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.6867834263541 45.0358422058121</gml:pos>
        <gml:pos>-73.3017051911075 46.5352647560344</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220311_MONTREAL_S1"/>
      <name>20220311_MONTREAL_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.2819693876745 45.047657107523</gml:pos>
        <gml:pos>-73.2117234506923 46.5109779715421</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220306_MONTREAL_S1"/>
      <name>20220306_MONTREAL_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.6867834263541 45.0358422058121</gml:pos>
        <gml:pos>-73.3017051911075 46.5352647560344</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220227_MONTREAL_S1"/>
      <name>20220227_MONTREAL_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.2819693876745 45.047657107523</gml:pos>
        <gml:pos>-73.2117234506923 46.5109779715421</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220222_MONTREAL_S1"/>
      <name>20220222_MONTREAL_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.6867834263541 45.0358422058121</gml:pos>
        <gml:pos>-73.3017051911075 46.5352647560344</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220215_MONTREAL_S1"/>
      <name>20220215_MONTREAL_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.2819693876745 45.047657107523</gml:pos>
        <gml:pos>-73.2117234506923 46.5109779715421</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220203_MONTREAL_S1"/>
      <name>20220203_MONTREAL_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.2819693876745 45.047657107523</gml:pos>
        <gml:pos>-73.2117234506923 46.5109779715421</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220129_MONTREAL_S1"/>
      <name>20220129_MONTREAL_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.6867834263541 45.0358422058121</gml:pos>
        <gml:pos>-73.3017051911075 46.5352647560344</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220122_MONTREAL_S1"/>
      <name>20220122_MONTREAL_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.2819693876745 45.047657107523</gml:pos>
        <gml:pos>-73.2117234506923 46.5109779715421</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220117_MONTREAL_S1"/>
      <name>20220117_MONTREAL_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.6867834263541 45.0358422058121</gml:pos>
        <gml:pos>-73.3017051911075 46.5352647560344</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220110_MONTREAL_S1"/>
      <name>20220110_MONTREAL_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.2819693876745 45.047657107523</gml:pos>
        <gml:pos>-73.2117234506923 46.5109779715421</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220105_MONTREAL_S1"/>
      <name>20220105_MONTREAL_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.6867834263541 45.0358422058121</gml:pos>
        <gml:pos>-73.3017051911075 46.5352647560344</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210328_MONTREAL_S1"/>
      <name>20210328_MONTREAL_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.2819693876745 45.047657107523</gml:pos>
        <gml:pos>-73.2117234506923 46.5109779715421</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210323_MONTREAL_S1"/>
      <name>20210323_MONTREAL_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.6867834263541 45.0358422058121</gml:pos>
        <gml:pos>-73.3017051911075 46.5352647560344</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210316_MONTREAL_S1"/>
      <name>20210316_MONTREAL_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.2819693876745 45.047657107523</gml:pos>
        <gml:pos>-73.2117234506923 46.5109779715421</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210311_MONTREAL_S1"/>
      <name>20210311_MONTREAL_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.6867834263541 45.0358422058121</gml:pos>
        <gml:pos>-73.3017051911075 46.5352647560344</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210304_MONTREAL_S1"/>
      <name>20210304_MONTREAL_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.2819693876745 45.047657107523</gml:pos>
        <gml:pos>-73.2117234506923 46.5109779715421</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210227_MONTREAL_S1"/>
      <name>20210227_MONTREAL_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.6867834263541 45.0358422058121</gml:pos>
        <gml:pos>-73.3017051911075 46.5352647560344</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210220_MONTREAL_S1"/>
      <name>20210220_MONTREAL_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.2819693876745 45.047657107523</gml:pos>
        <gml:pos>-73.2117234506923 46.5109779715421</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210215_MONTREAL_S1"/>
      <name>20210215_MONTREAL_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.6867834263541 45.0358422058121</gml:pos>
        <gml:pos>-73.3017051911075 46.5352647560344</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210208_MONTREAL_S1"/>
      <name>20210208_MONTREAL_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.2819693876745 45.047657107523</gml:pos>
        <gml:pos>-73.2117234506923 46.5109779715421</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210203_MONTREAL_S1"/>
      <name>20210203_MONTREAL_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.6867834263541 45.0358422058121</gml:pos>
        <gml:pos>-73.3017051911075 46.5352647560344</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210127_MONTREAL_S1"/>
      <name>20210127_MONTREAL_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.2819693876745 45.047657107523</gml:pos>
        <gml:pos>-73.2117234506923 46.5109779715421</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210122_MONTREAL_S1"/>
      <name>20210122_MONTREAL_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.6867834263541 45.0358422058121</gml:pos>
        <gml:pos>-73.3017051911075 46.5352647560344</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210115_MONTREAL_S1"/>
      <name>20210115_MONTREAL_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.2819693876745 45.047657107523</gml:pos>
        <gml:pos>-73.2117234506923 46.5109779715421</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210110_MONTREAL_S1"/>
      <name>20210110_MONTREAL_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.6867834263541 45.0358422058121</gml:pos>
        <gml:pos>-73.174537930293 46.5414270372323</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210103_MONTREAL_S1"/>
      <name>20210103_MONTREAL_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.2819693876745 45.047657107523</gml:pos>
        <gml:pos>-73.2117234506923 46.5109779715421</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200328_MONTREAL_R2"/>
      <name>20200328_MONTREAL_R2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.1304624027396 45.0118271040814</gml:pos>
        <gml:pos>-73.0437025954264 45.9912841713334</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200325_MONTREAL_R2"/>
      <name>20200325_MONTREAL_R2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.0866851370523 45.0250755255493</gml:pos>
        <gml:pos>-72.911141690445 46.3231871294032</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200321_MONTREAL_S1"/>
      <name>20200321_MONTREAL_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.2819693876745 45.047657107523</gml:pos>
        <gml:pos>-73.2117234506923 46.5109779715421</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200316_MONTREAL_S1"/>
      <name>20200316_MONTREAL_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.6867834263541 45.0358422058121</gml:pos>
        <gml:pos>-73.174537930293 46.5414270372323</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200309_MONTREAL_S1"/>
      <name>20200309_MONTREAL_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.2819693876745 45.047657107523</gml:pos>
        <gml:pos>-73.2117234506923 46.5109779715421</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200304_MONTREAL_R2"/>
      <name>20200304_MONTREAL_R2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.1662257737683 45.0173203704495</gml:pos>
        <gml:pos>-72.9113730481537 46.3504519550979</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200226_MONTREAL_S1"/>
      <name>20200226_MONTREAL_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.2819693876745 45.047657107523</gml:pos>
        <gml:pos>-73.2117234506923 46.5109779715421</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200221_MONTREAL_S1"/>
      <name>20200221_MONTREAL_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.6867834263541 45.0358422058121</gml:pos>
        <gml:pos>-73.174537930293 46.5414270372323</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200214_MONTREAL_S1"/>
      <name>20200214_MONTREAL_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.2819693876745 45.047657107523</gml:pos>
        <gml:pos>-73.2117234506923 46.5109779715421</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200209_MONTREAL_S1"/>
      <name>20200209_MONTREAL_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.6867834263541 45.0358422058121</gml:pos>
        <gml:pos>-73.174537930293 46.5414270372323</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200206_MONTREAL_R2"/>
      <name>20200206_MONTREAL_R2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.2673232725707 44.9667796563449</gml:pos>
        <gml:pos>-73.0844683898115 46.2725981752657</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200202_MONTREAL_S1"/>
      <name>20200202_MONTREAL_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.2819693876745 45.047657107523</gml:pos>
        <gml:pos>-73.2117234506923 46.5109779715421</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200128_MONTREAL_S1"/>
      <name>20200128_MONTREAL_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.6867834263541 45.0358422058121</gml:pos>
        <gml:pos>-73.174537930293 46.5414270372323</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200121_MONTREAL_S1"/>
      <name>20200121_MONTREAL_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.2819693876745 45.047657107523</gml:pos>
        <gml:pos>-73.2117234506923 46.5109779715421</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200116_MONTREAL_S1"/>
      <name>20200116_MONTREAL_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.6867834263541 45.0358422058121</gml:pos>
        <gml:pos>-73.174537930293 46.5414270372323</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200116_MONTREAL_R2"/>
      <name>20200116_MONTREAL_R2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.1739816604301 44.9776672720634</gml:pos>
        <gml:pos>-72.9422038437177 46.2640120427876</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200109_MONTREAL_S1"/>
      <name>20200109_MONTREAL_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.2819693876745 45.047657107523</gml:pos>
        <gml:pos>-73.2117234506923 46.5109779715421</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200106_MONTREAL_R2"/>
      <name>20200106_MONTREAL_R2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.0921316898215 45.1313324395286</gml:pos>
        <gml:pos>-72.9637351231111 46.2727277050596</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200104_MONTREAL_S1"/>
      <name>20200104_MONTREAL_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.6867834259114 45.0358422056274</gml:pos>
        <gml:pos>-73.1745379298677 46.541427037042</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220323_ROUGE_S1"/>
      <name>20220323_ROUGE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-75.1110187828609 45.4194968588226</gml:pos>
        <gml:pos>-74.1776346056257 46.5184857597305</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220311_ROUGE_S1"/>
      <name>20220311_ROUGE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-75.1110187828609 45.4194968588226</gml:pos>
        <gml:pos>-74.1776346056257 46.5184857597305</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220227_ROUGE_S1"/>
      <name>20220227_ROUGE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-75.1110187828609 45.4194968588226</gml:pos>
        <gml:pos>-74.1776346056257 46.5184857597305</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220215_ROUGE_S1"/>
      <name>20220215_ROUGE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-75.1110187828609 45.4194968588226</gml:pos>
        <gml:pos>-74.1776346056257 46.5184857597305</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220203_ROUGE_S1"/>
      <name>20220203_ROUGE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-75.1110187828609 45.4194968588226</gml:pos>
        <gml:pos>-74.1776346056257 46.5184857597305</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220122_ROUGE_S1"/>
      <name>20220122_ROUGE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-75.1110187828609 45.4194968588226</gml:pos>
        <gml:pos>-74.1776346056257 46.5184857597305</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220110_ROUGE_S1"/>
      <name>20220110_ROUGE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-75.1110187828609 45.4194968588226</gml:pos>
        <gml:pos>-74.1776346056257 46.5184857597305</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210328_ROUGE_S1"/>
      <name>20210328_ROUGE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-75.1110187828609 45.4194968588226</gml:pos>
        <gml:pos>-74.1776346056257 46.5184857597305</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210316_ROUGE_S1"/>
      <name>20210316_ROUGE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-75.1110187828609 45.4194968588226</gml:pos>
        <gml:pos>-74.1776346056257 46.5184857597305</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210304_ROUGE_S1"/>
      <name>20210304_ROUGE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-75.1110187828609 45.4194968588226</gml:pos>
        <gml:pos>-74.1776346056257 46.5184857597305</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210220_ROUGE_S1"/>
      <name>20210220_ROUGE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-75.1110187828609 45.4194968588226</gml:pos>
        <gml:pos>-74.1776346056257 46.5184857597305</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210208_ROUGE_S1"/>
      <name>20210208_ROUGE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-75.1110187828609 45.4194968588226</gml:pos>
        <gml:pos>-74.1776346056257 46.5184857597305</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210127_ROUGE_S1"/>
      <name>20210127_ROUGE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-75.1110187828609 45.4194968588226</gml:pos>
        <gml:pos>-74.1776346056257 46.5184857597305</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210115_ROUGE_S1"/>
      <name>20210115_ROUGE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-75.1110187828609 45.4194968588226</gml:pos>
        <gml:pos>-74.1776346056257 46.5184857597305</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210103_ROUGE_S1"/>
      <name>20210103_ROUGE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-75.1110187828609 45.4194968588226</gml:pos>
        <gml:pos>-74.1776346056257 46.5184857597305</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200402_ROUGE_S1"/>
      <name>20200402_ROUGE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-75.1110187828609 45.4194968588226</gml:pos>
        <gml:pos>-74.1776346056257 46.5184857597305</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200321_ROUGE_S1"/>
      <name>20200321_ROUGE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-75.1110187828609 45.4194968588226</gml:pos>
        <gml:pos>-74.1776346056257 46.5184857597305</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200309_ROUGE_S1"/>
      <name>20200309_ROUGE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-75.1110187828609 45.4194968588226</gml:pos>
        <gml:pos>-74.1776346056257 46.5184857597305</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200226_ROUGE_S1"/>
      <name>20200226_ROUGE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-75.1110187828609 45.4194968588226</gml:pos>
        <gml:pos>-74.1776346056257 46.5184857597305</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200214_ROUGE_S1"/>
      <name>20200214_ROUGE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-75.1110187828609 45.4194968588226</gml:pos>
        <gml:pos>-74.1776346056257 46.5184857597305</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200202_ROUGE_S1"/>
      <name>20200202_ROUGE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-75.1110187828609 45.4194968588226</gml:pos>
        <gml:pos>-74.1776346056257 46.5184857597305</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200121_ROUGE_S1"/>
      <name>20200121_ROUGE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-75.1110187828609 45.4194968588226</gml:pos>
        <gml:pos>-74.1776346056257 46.5184857597305</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200109_ROUGE_S1"/>
      <name>20200109_ROUGE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-75.1110187828609 45.4194968588226</gml:pos>
        <gml:pos>-74.1776346056257 46.5184857597305</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220418_SAGUENAY_S1"/>
      <name>20220418_SAGUENAY_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.9096841047796 48.2155706040563</gml:pos>
        <gml:pos>-70.921383931803 49.7770183915821</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220406_SAGUENAY_S1"/>
      <name>20220406_SAGUENAY_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.9096841047796 48.2155706040563</gml:pos>
        <gml:pos>-70.921383931803 49.7770183915821</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220325_SAGUENAY_S1"/>
      <name>20220325_SAGUENAY_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.9096841047796 48.2155706040563</gml:pos>
        <gml:pos>-70.921383931803 49.7770183915821</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220313_SAGUENAY_S1"/>
      <name>20220313_SAGUENAY_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.9096841047796 48.2155706040563</gml:pos>
        <gml:pos>-70.921383931803 49.7770183915821</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210411_SAGUENAY_S1"/>
      <name>20210411_SAGUENAY_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.9096841047796 48.2155706040563</gml:pos>
        <gml:pos>-70.921383931803 49.7770183915821</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210330_SAGUENAY_S1"/>
      <name>20210330_SAGUENAY_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.9096841047796 48.2155706040563</gml:pos>
        <gml:pos>-70.921383931803 49.7770183915821</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210318_SAGUENAY_S1"/>
      <name>20210318_SAGUENAY_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.9096841047796 48.2155706040563</gml:pos>
        <gml:pos>-70.921383931803 49.7770183915821</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200428_SAGUENAY_S1"/>
      <name>20200428_SAGUENAY_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.9096841047796 48.2155706040563</gml:pos>
        <gml:pos>-70.921383931803 49.7770183915821</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200416_SAGUENAY_S1"/>
      <name>20200416_SAGUENAY_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.9096841047796 48.2155706040563</gml:pos>
        <gml:pos>-70.921383931803 49.7770183915821</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200404_SAGUENAY_S1"/>
      <name>20200404_SAGUENAY_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.9096841047796 48.2155706040563</gml:pos>
        <gml:pos>-70.921383931803 49.7770183915821</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200323_SAGUENAY_S1"/>
      <name>20200323_SAGUENAY_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.9096841047796 48.2155706040563</gml:pos>
        <gml:pos>-70.921383931803 49.7770183915821</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220406_ST-FRANCOIS_S1"/>
      <name>20220406_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.4058361416469 44.8754147553144</gml:pos>
        <gml:pos>-70.2001720166539 45.8419441311162</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220330_ST-FRANCOIS_S1"/>
      <name>20220330_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.5847961711691 45.1823984783413</gml:pos>
        <gml:pos>-71.1352114057111 46.8656929690115</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220329_ST-FRANCOIS_S1"/>
      <name>20220329_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.2863677536981 44.9818828815984</gml:pos>
        <gml:pos>-71.0569962655105 46.1798592375814</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220325_ST-FRANCOIS_S1"/>
      <name>20220325_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.4058361416469 44.8754147553144</gml:pos>
        <gml:pos>-70.2001720166539 45.8419441311162</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220318_ST-FRANCOIS_S1"/>
      <name>20220318_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.5847961711691 45.1823984783413</gml:pos>
        <gml:pos>-71.1352114057111 46.8656929690115</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220317_ST-FRANCOIS_S1"/>
      <name>20220317_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.2863677536981 44.9818828815984</gml:pos>
        <gml:pos>-71.0569962655105 46.1798592375814</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220313_ST-FRANCOIS_S1"/>
      <name>20220313_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.4058361416469 44.8754147553144</gml:pos>
        <gml:pos>-70.2001720166539 45.8419441311162</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220306_ST-FRANCOIS_S1"/>
      <name>20220306_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.5847961711691 45.1823984783413</gml:pos>
        <gml:pos>-71.1352114057111 46.8656929690115</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220305_ST-FRANCOIS_S1"/>
      <name>20220305_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.2863677536981 44.9818828815984</gml:pos>
        <gml:pos>-71.0569962655105 46.1798592375814</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220222_ST-FRANCOIS_S1"/>
      <name>20220222_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.5847961711691 45.1823984783413</gml:pos>
        <gml:pos>-71.1352114057111 46.8656929690115</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220221_ST-FRANCOIS_S1"/>
      <name>20220221_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.2863677536981 44.9818828815984</gml:pos>
        <gml:pos>-71.0569962655105 46.1798592375814</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220217_ST-FRANCOIS_S1"/>
      <name>20220217_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.4058361416469 44.8754147553144</gml:pos>
        <gml:pos>-70.2001720166539 45.8419441311162</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220209_ST-FRANCOIS_S1"/>
      <name>20220209_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.2863677536981 44.9818828815984</gml:pos>
        <gml:pos>-71.0569962655105 46.1798592375814</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220205_ST-FRANCOIS_S1"/>
      <name>20220205_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.4058361416469 44.8754147553144</gml:pos>
        <gml:pos>-70.2001720166539 45.8419441311162</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220129_ST-FRANCOIS_S1"/>
      <name>20220129_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.5847961711691 45.1823984783413</gml:pos>
        <gml:pos>-71.1352114057111 46.8656929690115</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220128_ST-FRANCOIS_S1"/>
      <name>20220128_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.2863677536981 44.9818828815984</gml:pos>
        <gml:pos>-71.0569962655105 46.1798592375814</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220124_ST-FRANCOIS_S1"/>
      <name>20220124_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.4058361416469 44.8754147553144</gml:pos>
        <gml:pos>-70.2001720166539 45.8419441311162</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220117_ST-FRANCOIS_S1"/>
      <name>20220117_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.5847961711691 45.1823984783413</gml:pos>
        <gml:pos>-71.1352114057111 46.8656929690115</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220116_ST-FRANCOIS_S1"/>
      <name>20220116_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.2863677536981 44.9818828815984</gml:pos>
        <gml:pos>-71.0569962655105 46.1798592375814</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220112_ST-FRANCOIS_S1"/>
      <name>20220112_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.4058361416469 44.8754147553144</gml:pos>
        <gml:pos>-70.2001720166539 45.8419441311162</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220105_ST-FRANCOIS_S1"/>
      <name>20220105_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.5847961711691 45.1823984783413</gml:pos>
        <gml:pos>-71.1352114057111 46.8656929690115</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20211231_ST-FRANCOIS_S1"/>
      <name>20211231_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.4058361416469 44.8754147553144</gml:pos>
        <gml:pos>-70.2001720166539 45.8419441311162</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220104_ST-FRANCOIS_S1"/>
      <name>20220104_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.2863677536981 44.9818828815984</gml:pos>
        <gml:pos>-71.0569962655105 46.1798592375814</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210323_ST-FRANCOIS_S1"/>
      <name>20210323_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.5847961711691 45.1823984783413</gml:pos>
        <gml:pos>-71.1352114057111 46.8656929690115</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210322_ST-FRANCOIS_S1"/>
      <name>20210322_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.2863677536981 44.9818828815984</gml:pos>
        <gml:pos>-71.0569962655105 46.1798592375814</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210318_ST-FRANCOIS_S1"/>
      <name>20210318_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.4058361416469 44.8754147553144</gml:pos>
        <gml:pos>-70.2001720166539 45.8419441311162</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210311_ST-FRANCOIS_S1"/>
      <name>20210311_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.5847961711691 45.1823984783413</gml:pos>
        <gml:pos>-71.1352114057111 46.8656929690115</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210306_ST-FRANCOIS_S1"/>
      <name>20210306_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.4058361416469 44.8754147553144</gml:pos>
        <gml:pos>-70.2001720166539 45.8419441311162</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210227_ST-FRANCOIS_S1"/>
      <name>20210227_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.5847961711691 45.1823984783413</gml:pos>
        <gml:pos>-71.1352114057111 46.8656929690115</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210226_ST-FRANCOIS_S1"/>
      <name>20210226_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.2863677536981 44.9818828815984</gml:pos>
        <gml:pos>-71.0569962655105 46.1798592375814</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210222_ST-FRANCOIS_S1"/>
      <name>20210222_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.4058361416469 44.8754147553144</gml:pos>
        <gml:pos>-70.2001720166539 45.8419441311162</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210215_ST-FRANCOIS_S1"/>
      <name>20210215_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.5847961711691 45.1823984783413</gml:pos>
        <gml:pos>-71.1352114057111 46.8656929690115</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210214_ST-FRANCOIS_S1"/>
      <name>20210214_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.2863677536981 44.9818828815984</gml:pos>
        <gml:pos>-71.0569962655105 46.1798592375814</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210203_ST-FRANCOIS_S1"/>
      <name>20210203_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.5847961711691 45.1823984783413</gml:pos>
        <gml:pos>-71.1352114057111 46.8656929690115</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210202_ST-FRANCOIS_S1"/>
      <name>20210202_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.2863677536981 44.9818828815984</gml:pos>
        <gml:pos>-71.0569962655105 46.1798592375814</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210129_ST-FRANCOIS_S1"/>
      <name>20210129_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.4058361416469 44.8754147553144</gml:pos>
        <gml:pos>-70.2001720166539 45.8419441311162</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210122_ST-FRANCOIS_S1"/>
      <name>20210122_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.5847961711691 45.1823984783413</gml:pos>
        <gml:pos>-71.1352114057111 46.8656929690115</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210121_ST-FRANCOIS_S1"/>
      <name>20210121_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.2863677536981 44.9818828815984</gml:pos>
        <gml:pos>-71.0569962655105 46.1798592375814</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210117_ST-FRANCOIS_S1"/>
      <name>20210117_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.4058361416469 44.8754147553144</gml:pos>
        <gml:pos>-70.2001720166539 45.8419441311162</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210110_ST-FRANCOIS_S1"/>
      <name>20210110_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.5847961711691 45.1823984783413</gml:pos>
        <gml:pos>-71.1352114057111 46.8656929690115</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210109_ST-FRANCOIS_S1"/>
      <name>20210109_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.2863677536981 44.9818828815984</gml:pos>
        <gml:pos>-71.0569962655105 46.1798592375814</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210105_ST-FRANCOIS_S1"/>
      <name>20210105_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.4058361416469 44.8754147553144</gml:pos>
        <gml:pos>-70.2001720166539 45.8419441311162</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200408_ST-FRANCOIS_R2"/>
      <name>20200408_ST-FRANCOIS_R2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.1677139678892 44.9739215830279</gml:pos>
        <gml:pos>-70.9831869948029 46.8007478773514</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200404_ST-FRANCOIS_S1"/>
      <name>20200404_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.4058361416469 44.8754147553144</gml:pos>
        <gml:pos>-70.2001720166539 45.8419441311162</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200327_ST-FRANCOIS_S1"/>
      <name>20200327_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.2863677536981 44.9818828815984</gml:pos>
        <gml:pos>-71.0569962655105 46.1798592375814</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200324_ST-FRANCOIS_R2"/>
      <name>20200324_ST-FRANCOIS_R2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.4013044133246 45.6039510997199</gml:pos>
        <gml:pos>-71.566879849606 46.1658876262954</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200323_ST-FRANCOIS_S1"/>
      <name>20200323_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.4058361416469 44.8754147553144</gml:pos>
        <gml:pos>-70.2001720166539 45.8419441311162</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200318_ST-FRANCOIS_R2"/>
      <name>20200318_ST-FRANCOIS_R2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.3642213756298 44.9925490664757</gml:pos>
        <gml:pos>-71.2081707894337 46.2875809166485</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200316_ST-FRANCOIS_S1"/>
      <name>20200316_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.5847961711691 45.1823984783413</gml:pos>
        <gml:pos>-71.1352114057111 46.8656929690115</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200315_ST-FRANCOIS_S1"/>
      <name>20200315_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.2863677536981 44.9818828815984</gml:pos>
        <gml:pos>-71.0569962655105 46.1798592375814</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200311_ST-FRANCOIS_S1"/>
      <name>20200311_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.4058361416469 44.8754147553144</gml:pos>
        <gml:pos>-70.2001720166539 45.8419441311162</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200310_ST-FRANCOIS_R2"/>
      <name>20200310_ST-FRANCOIS_R2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.472440550427 44.9641128363416</gml:pos>
        <gml:pos>-71.4574398498366 46.4852530874679</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200304_ST-FRANCOIS_S1"/>
      <name>20200304_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.2863677536981 44.9818828815984</gml:pos>
        <gml:pos>-71.0569962655105 46.1798592375814</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200228_ST-FRANCOIS_S1"/>
      <name>20200228_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.4058361416469 44.8754147553144</gml:pos>
        <gml:pos>-70.2001720166539 45.8419441311162</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200220_ST-FRANCOIS_R2"/>
      <name>20200220_ST-FRANCOIS_R2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.351613857378 44.9644915084381</gml:pos>
        <gml:pos>-71.0447709083055 46.8340914902751</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200216_ST-FRANCOIS_S1"/>
      <name>20200216_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.4058361416469 44.8754147553144</gml:pos>
        <gml:pos>-70.2001720166539 45.8419441311162</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200208_ST-FRANCOIS_S1"/>
      <name>20200208_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.2863677536981 44.9818828815984</gml:pos>
        <gml:pos>-71.0569962655105 46.1798592375814</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200204_ST-FRANCOIS_S1"/>
      <name>20200204_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.4058361416469 44.8754147553144</gml:pos>
        <gml:pos>-70.2001720166539 45.8419441311162</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200202_ST-FRANCOIS_R2"/>
      <name>20200202_ST-FRANCOIS_R2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.08059323917 44.9348546496764</gml:pos>
        <gml:pos>-70.9782138840259 46.5031507135519</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200127_ST-FRANCOIS_S1"/>
      <name>20200127_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.2863677536981 44.9818828815984</gml:pos>
        <gml:pos>-71.0569962655105 46.1798592375814</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200123_ST-FRANCOIS_S1"/>
      <name>20200123_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.4058361416469 44.8754147553144</gml:pos>
        <gml:pos>-70.2001720166539 45.8419441311162</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200122_ST-FRANCOIS_R2"/>
      <name>20200122_ST-FRANCOIS_R2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.4350029320626 45.5384466612586</gml:pos>
        <gml:pos>-71.5675635188329 46.3159723675577</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200116_ST-FRANCOIS_S1"/>
      <name>20200116_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.5847961711691 45.1823984783413</gml:pos>
        <gml:pos>-71.1352114057111 46.8656929690115</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200115_ST-FRANCOIS_S1"/>
      <name>20200115_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.2863677536981 44.9818828815984</gml:pos>
        <gml:pos>-71.0569962655105 46.1798592375814</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200113_ST-FRANCOIS_R2"/>
      <name>20200113_ST-FRANCOIS_R2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.3554187799288 44.965180132172</gml:pos>
        <gml:pos>-71.3269539100253 45.9458333052774</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200111_ST-FRANCOIS_S1"/>
      <name>20200111_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.4058361416469 44.8754147553144</gml:pos>
        <gml:pos>-70.2001720166539 45.8419441311162</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200104_ST-FRANCOIS_S1"/>
      <name>20200104_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.5847961711691 45.1823984783413</gml:pos>
        <gml:pos>-71.1352114057111 46.8656929690115</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200103_ST-FRANCOIS_S1"/>
      <name>20200103_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.2863677536981 44.9818828815984</gml:pos>
        <gml:pos>-71.0569962655105 46.1798592375814</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220330_YAMASKA_S1"/>
      <name>20220330_YAMASKA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.4321934194363 45.1807723231157</gml:pos>
        <gml:pos>-72.356436837324 46.4827284624252</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220329_YAMASKA_S1"/>
      <name>20220329_YAMASKA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.5986137191563 45.0686714638062</gml:pos>
        <gml:pos>-72.1566768094658 46.2752778616</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220318_YAMASKA_S1"/>
      <name>20220318_YAMASKA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.4321934194363 45.1807723231157</gml:pos>
        <gml:pos>-72.356436837324 46.4827284624252</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220317_YAMASKA_S1"/>
      <name>20220317_YAMASKA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.5986137191563 45.0686714638062</gml:pos>
        <gml:pos>-72.1566768094658 46.2752778616</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220306_YAMASKA_S1"/>
      <name>20220306_YAMASKA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.4321934194363 45.1807723231157</gml:pos>
        <gml:pos>-72.356436837324 46.4827284624252</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220305_YAMASKA_S1"/>
      <name>20220305_YAMASKA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.5986137191563 45.0686714638062</gml:pos>
        <gml:pos>-72.1566768094658 46.2752778616</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220222_YAMASKA_S1"/>
      <name>20220222_YAMASKA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.4321934194363 45.1807723231157</gml:pos>
        <gml:pos>-72.356436837324 46.4827284624252</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220221_YAMASKA_S1"/>
      <name>20220221_YAMASKA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.5986137191563 45.0686714638062</gml:pos>
        <gml:pos>-72.1566768094658 46.2752778616</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220209_YAMASKA_S1"/>
      <name>20220209_YAMASKA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.5986137191563 45.0686714638062</gml:pos>
        <gml:pos>-72.1566768094658 46.2752778616</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220129_YAMASKA_S1"/>
      <name>20220129_YAMASKA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.4321934194363 45.1807723231157</gml:pos>
        <gml:pos>-72.356436837324 46.4827284624252</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220128_YAMASKA_S1"/>
      <name>20220128_YAMASKA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.5986137191563 45.0686714638062</gml:pos>
        <gml:pos>-72.1566768094658 46.2752778616</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220117_YAMASKA_S1"/>
      <name>20220117_YAMASKA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.4321934194363 45.1807723231157</gml:pos>
        <gml:pos>-72.356436837324 46.4827284624252</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220116_YAMASKA_S1"/>
      <name>20220116_YAMASKA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.5986137191563 45.0686714638062</gml:pos>
        <gml:pos>-72.1566768094658 46.2752778616</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220105_YAMASKA_S1"/>
      <name>20220105_YAMASKA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.4321934194363 45.1807723231157</gml:pos>
        <gml:pos>-72.356436837324 46.4827284624252</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220104_YAMASKA_S1"/>
      <name>20220104_YAMASKA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.5986137191563 45.0686714638062</gml:pos>
        <gml:pos>-72.1566768094658 46.2752778616</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210323_YAMASKA_S1"/>
      <name>20210323_YAMASKA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.4321934194363 45.1807723231157</gml:pos>
        <gml:pos>-72.356436837324 46.4827284624252</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210322_YAMASKA_S1"/>
      <name>20210322_YAMASKA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.5986137191563 45.0686714638062</gml:pos>
        <gml:pos>-72.1566768094658 46.2752778616</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210311_YAMASKA_S1"/>
      <name>20210311_YAMASKA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.4321934194363 45.1807723231157</gml:pos>
        <gml:pos>-72.356436837324 46.4827284624252</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210227_YAMASKA_S1"/>
      <name>20210227_YAMASKA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.4321934194363 45.1807723231157</gml:pos>
        <gml:pos>-72.356436837324 46.4827284624252</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210226_YAMASKA_S1"/>
      <name>20210226_YAMASKA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.5986137191563 45.0686714638062</gml:pos>
        <gml:pos>-72.1566768094658 46.2752778616</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210215_YAMASKA_S1"/>
      <name>20210215_YAMASKA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.4321934194363 45.1807723231157</gml:pos>
        <gml:pos>-72.356436837324 46.4827284624252</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210214_YAMASKA_S1"/>
      <name>20210214_YAMASKA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.5986137191563 45.0686714638062</gml:pos>
        <gml:pos>-72.1566768094658 46.2752778616</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210203_YAMASKA_S1"/>
      <name>20210203_YAMASKA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.4321934194363 45.1807723231157</gml:pos>
        <gml:pos>-72.356436837324 46.4827284624252</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210202_YAMASKA_S1"/>
      <name>20210202_YAMASKA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.5986137191563 45.0686714638062</gml:pos>
        <gml:pos>-72.1566768094658 46.2752778616</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210122_YAMASKA_S1"/>
      <name>20210122_YAMASKA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.4321934194363 45.1807723231157</gml:pos>
        <gml:pos>-72.356436837324 46.4827284624252</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210121_YAMASKA_S1"/>
      <name>20210121_YAMASKA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.5986137191563 45.0686714638062</gml:pos>
        <gml:pos>-72.1566768094658 46.2752778616</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210110_YAMASKA_S1"/>
      <name>20210110_YAMASKA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.539216024407 45.1757494959204</gml:pos>
        <gml:pos>-72.3540570176347 46.4828216994147</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210109_YAMASKA_S1"/>
      <name>20210109_YAMASKA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.5986137191563 45.0686714638062</gml:pos>
        <gml:pos>-72.1566768094658 46.2752778616</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200403_YAMASKA_R2"/>
      <name>20200403_YAMASKA_R2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.3148019060438 45.6540739173861</gml:pos>
        <gml:pos>-72.4215348213424 46.4989968963015</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200328_YAMASKA_S1"/>
      <name>20200328_YAMASKA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.539216024407 45.1757494959204</gml:pos>
        <gml:pos>-72.3540570176347 46.4828216994147</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200327_YAMASKA_S1"/>
      <name>20200327_YAMASKA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.5986137191563 45.0686714638062</gml:pos>
        <gml:pos>-72.1566768094658 46.2752778616</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200316_YAMASKA_S1"/>
      <name>20200316_YAMASKA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.539216024407 45.1757494959204</gml:pos>
        <gml:pos>-72.3540570176347 46.4828216994147</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200315_YAMASKA_S1"/>
      <name>20200315_YAMASKA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.5986137191563 45.0686714638062</gml:pos>
        <gml:pos>-72.1566768094658 46.2752778616</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200311_YAMASKA_R2"/>
      <name>20200311_YAMASKA_R2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.3976244953633 45.662607677743</gml:pos>
        <gml:pos>-72.4460405346989 46.5147621050439</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200308_YAMASKA_R2"/>
      <name>20200308_YAMASKA_R2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.3437332593683 45.0238291213296</gml:pos>
        <gml:pos>-72.2439676770161 46.2173086221701</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200304_YAMASKA_S1"/>
      <name>20200304_YAMASKA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.5986137191563 45.0686714638062</gml:pos>
        <gml:pos>-72.1566768094658 46.2752778616</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190303_YAMASKA_R2_5"/>
      <name>20190303_YAMASKA_R2_5</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.2123647144448 45.3684155084669</gml:pos>
        <gml:pos>-72.8160656359414 45.8223454249936</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200226_YAMASKA_R2"/>
      <name>20200226_YAMASKA_R2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.5286278126899 45.0526812325927</gml:pos>
        <gml:pos>-72.0386773704701 46.328157051352</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200221_YAMASKA_S1"/>
      <name>20200221_YAMASKA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.539216024407 45.1757494959204</gml:pos>
        <gml:pos>-72.3540570176347 46.4828216994147</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200213_YAMASKA_R2"/>
      <name>20200213_YAMASKA_R2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.5054840165615 45.1685518402568</gml:pos>
        <gml:pos>-72.3470151675749 46.4989545118014</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200209_YAMASKA_R2"/>
      <name>20200209_YAMASKA_R2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.4311974120179 45.2783629310927</gml:pos>
        <gml:pos>-72.3657188621685 46.2376373608366</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200209_YAMASKA_S1"/>
      <name>20200209_YAMASKA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.539216024407 45.1757494959204</gml:pos>
        <gml:pos>-72.3540570176347 46.4828216994147</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200208_YAMASKA_S1"/>
      <name>20200208_YAMASKA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.5986137191563 45.0686714638062</gml:pos>
        <gml:pos>-72.1566768094658 46.2752778616</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200128_YAMASKA_S1"/>
      <name>20200128_YAMASKA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.539216024407 45.1757494959204</gml:pos>
        <gml:pos>-72.3540570176347 46.4828216994147</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200127_YAMASKA_S1"/>
      <name>20200127_YAMASKA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.5986137191563 45.0686714638062</gml:pos>
        <gml:pos>-72.1566768094658 46.2752778616</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200116_YAMASKA_S1"/>
      <name>20200116_YAMASKA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.539216024407 45.1757494959204</gml:pos>
        <gml:pos>-72.3540570176347 46.4828216994147</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200115_YAMASKA_S1"/>
      <name>20200115_YAMASKA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.5986137191563 45.0686714638062</gml:pos>
        <gml:pos>-72.1566768094658 46.2752778616</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200104_YAMASKA_S1"/>
      <name>20200104_YAMASKA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.53921602469 45.1757494961382</gml:pos>
        <gml:pos>-72.3540570179058 46.4828216996357</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200103_YAMASKA_S1"/>
      <name>20200103_YAMASKA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.5986137191563 45.0686714638062</gml:pos>
        <gml:pos>-72.1566768094658 46.2752778616</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220423_SAGUENAY_L8_1"/>
      <name>20220423_SAGUENAY_L8_1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.9085850286907 48.2694643743433</gml:pos>
        <gml:pos>-70.8568539366696 49.5781839706446</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220423_SAGUENAY_L8_2"/>
      <name>20220423_SAGUENAY_L8_2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.894093522702 48.2354462353629</gml:pos>
        <gml:pos>-71.8172127473358 49.5520208539481</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220418_BONAVENTURE_L8"/>
      <name>20220418_BONAVENTURE_L8</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-66.6859310259462 48.3538724883191</gml:pos>
        <gml:pos>-64.7101322394038 49.0451755542285</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220418_MATANE_L8"/>
      <name>20220418_MATANE_L8</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.6607540594603 47.7624440535401</gml:pos>
        <gml:pos>-66.6613113441267 49.0573823534878</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220418_MATAPEDIA_L8"/>
      <name>20220418_MATAPEDIA_L8</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-66.7100304864465 47.7134531566984</gml:pos>
        <gml:pos>-64.7610857011313 48.4035626119923</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220405_BECANCOUR_S2"/>
      <name>20220405_BECANCOUR_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.3499365339404 45.6444950031873</gml:pos>
        <gml:pos>-71.3418417747752 46.9520273473731</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220405_CHAUDIERE_S2"/>
      <name>20220405_CHAUDIERE_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.4160884187617 45.6739203020918</gml:pos>
        <gml:pos>-70.4309002842063 46.9739336547537</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220405_MONTREAL_S2"/>
      <name>20220405_MONTREAL_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.1447128514721 44.9702079062974</gml:pos>
        <gml:pos>-73.106293360806 46.2900858347461</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220405_ROUGE_S2"/>
      <name>20220405_ROUGE_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-75.0852033169403 45.0871402639967</gml:pos>
        <gml:pos>-74.0216138918046 46.4142952026938</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220405_YAMASKA_S2"/>
      <name>20220405_YAMASKA_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.2413171456918 45.1855115891869</gml:pos>
        <gml:pos>-72.2205545886265 46.4990005499973</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220403_BONAVENTURE_L8"/>
      <name>20220403_BONAVENTURE_L8</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-66.6859310259462 48.3538724883191</gml:pos>
        <gml:pos>-64.7101322394038 49.0451755542285</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220403_MATANE_L8"/>
      <name>20220403_MATANE_L8</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.6607540594603 47.7624440535401</gml:pos>
        <gml:pos>-66.6613113441267 49.0573823534878</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220403_MATAPEDIA_L8"/>
      <name>20220403_MATAPEDIA_L8</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-66.7100304864465 47.7134531566984</gml:pos>
        <gml:pos>-64.7610857011313 48.4035626119923</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220402_YAMASKA_S2"/>
      <name>20220402_YAMASKA_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.2413171456918 45.1855115891869</gml:pos>
        <gml:pos>-72.2205545886265 46.4990005499973</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220402_CHAUDIERE_S2"/>
      <name>20220402_CHAUDIERE_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.4160884187617 45.6739203020918</gml:pos>
        <gml:pos>-70.4309002842063 46.9739336547537</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220402_BECANCOUR_S2"/>
      <name>20220402_BECANCOUR_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.3499365339404 45.6444950031873</gml:pos>
        <gml:pos>-71.3418417747752 46.9520273473731</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220402_MONTREAL_S2"/>
      <name>20220402_MONTREAL_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.1447128514721 44.9702079062974</gml:pos>
        <gml:pos>-73.106293360806 46.2900858347461</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220402_ST-FRANCOIS_S2"/>
      <name>20220402_ST-FRANCOIS_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.2518627404855 45.0069902282467</gml:pos>
        <gml:pos>-70.4066139430267 45.6952205395341</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220330_YAMASKA_L9"/>
      <name>20220330_YAMASKA_L9</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.2414471564928 45.1854161557937</gml:pos>
        <gml:pos>-72.2204210441123 46.4990053505957</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220330_ST-FRANCOIS_L9"/>
      <name>20220330_ST-FRANCOIS_L9</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.2518627404855 45.0070798975492</gml:pos>
        <gml:pos>-70.4064906674117 45.6952229653387</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220330_MONTREAL_L9"/>
      <name>20220330_MONTREAL_L9</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.1447128514721 44.9701183890901</gml:pos>
        <gml:pos>-73.1064115467082 46.2900798954508</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220330_BECANCOUR_L9"/>
      <name>20220330_BECANCOUR_L9</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.3498052019201 45.6444099319816</gml:pos>
        <gml:pos>-71.3419648359828 46.9520236760565</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220330_ROUGE_L9"/>
      <name>20220330_ROUGE_L9</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-75.0852033169403 45.0870508203267</gml:pos>
        <gml:pos>-74.021730635727 46.4142880835167</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220322_BECANCOUR_L8"/>
      <name>20220322_BECANCOUR_L8</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.3498052019201 45.6444099319816</gml:pos>
        <gml:pos>-71.3419648359828 46.9520236760565</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220322_MONTREAL_L8"/>
      <name>20220322_MONTREAL_L8</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.1447128514721 44.9701183890901</gml:pos>
        <gml:pos>-73.1064115467082 46.2900798954508</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220322_ROUGE_L8"/>
      <name>20220322_ROUGE_L8</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-75.0852033169403 45.0870508203267</gml:pos>
        <gml:pos>-74.021730635727 46.4142880835167</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220322_YAMASKA_L8"/>
      <name>20220322_YAMASKA_L8</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.2414471564928 45.1854161557937</gml:pos>
        <gml:pos>-72.2204210441123 46.4990053505957</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220321_YAMASKA_S2"/>
      <name>20220321_YAMASKA_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.2413335871559 45.185458767796</gml:pos>
        <gml:pos>-72.2205012780532 46.4990380958696</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220321_MONTREAL_S2"/>
      <name>20220321_MONTREAL_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.1447447745843 44.9701199469151</gml:pos>
        <gml:pos>-73.1061999645918 46.2901580508695</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220321_ROUGE_S2"/>
      <name>20220321_ROUGE_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-75.0853356622193 45.0870559255944</gml:pos>
        <gml:pos>-74.0215160874419 46.4143458514044</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220315_MATAPEDIA_S2"/>
      <name>20220315_MATAPEDIA_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.6608451276019 47.7623726585505</gml:pos>
        <gml:pos>-66.6858778440117 48.41553736791</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220115_BECANCOUR_S2"/>
      <name>20220115_BECANCOUR_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.3499360663534 45.6444938895895</gml:pos>
        <gml:pos>-71.3418389219465 46.9520280620499</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220115_MONTREAL_S2"/>
      <name>20220115_MONTREAL_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.144715693776 44.9702055036714</gml:pos>
        <gml:pos>-73.1062927771848 46.2900856118492</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220115_ROUGE_S2"/>
      <name>20220115_ROUGE_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-75.0852076648752 45.0871373073626</gml:pos>
        <gml:pos>-74.0216139520299 46.4142940447651</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220115_ST-FRANCOIS_S2"/>
      <name>20220115_ST-FRANCOIS_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.2518635932076 45.0069875052573</gml:pos>
        <gml:pos>-70.4066099700273 45.6952202227041</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220115_YAMASKA_S2"/>
      <name>20220115_YAMASKA_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.2413180799857 45.1855095479926</gml:pos>
        <gml:pos>-72.2205531335823 46.4990012855337</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220110_YAMASKA_L8"/>
      <name>20220110_YAMASKA_L8</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.2413171456918 45.1854219532053</gml:pos>
        <gml:pos>-72.2206749215959 46.4989957492354</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220110_BECANCOUR_L8"/>
      <name>20220110_BECANCOUR_L8</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.3498052019201 45.6444099319816</gml:pos>
        <gml:pos>-71.3419648359828 46.9520236760565</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220110_CHAUDIERE_L8"/>
      <name>20220110_CHAUDIERE_L8</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.4160884187617 45.6738304613955</gml:pos>
        <gml:pos>-70.4310250845659 46.9739311597403</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220110_ST-FRANCOIS_L8"/>
      <name>20220110_ST-FRANCOIS_L8</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.2518627404855 45.0070798975492</gml:pos>
        <gml:pos>-70.4064906674117 45.6952229653387</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220108_ROUGE_L8"/>
      <name>20220108_ROUGE_L8</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-75.0852033169403 45.0870508203267</gml:pos>
        <gml:pos>-74.021730635727 46.4142880835167</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220103_CHAUDIERE_L8"/>
      <name>20220103_CHAUDIERE_L8</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.4160884187617 45.6738304613955</gml:pos>
        <gml:pos>-70.4310250845659 46.9739311597403</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220103_ROUGE_S2"/>
      <name>20220103_ROUGE_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-75.0852033169403 45.0871402639967</gml:pos>
        <gml:pos>-74.0216138918046 46.4142952026938</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210404_SAGUENAY_L8"/>
      <name>20210404_SAGUENAY_L8</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.894093522702 48.2408534905998</gml:pos>
        <gml:pos>-70.8568508035844 49.5781900890139</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210323_BECANCOUR_S2"/>
      <name>20210323_BECANCOUR_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.3498052019201 45.6444997148644</gml:pos>
        <gml:pos>-71.3418417747752 46.9520273473731</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210323_CHAUDIERE_S2"/>
      <name>20210323_CHAUDIERE_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.4160884187617 45.6739203020918</gml:pos>
        <gml:pos>-70.4309002842063 46.9739336547537</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210323_ST-FRANCOIS_S2"/>
      <name>20210323_ST-FRANCOIS_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.2518627404855 45.0069902282467</gml:pos>
        <gml:pos>-70.4066139430267 45.6952205395341</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210323_YAMASKA_S2"/>
      <name>20210323_YAMASKA_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.2413171456918 45.1855115891869</gml:pos>
        <gml:pos>-72.2205545886265 46.4990005499973</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210321_CHAUDIERE_L8"/>
      <name>20210321_CHAUDIERE_L8</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.4160884187617 45.0360036867304</gml:pos>
        <gml:pos>-70.4067405936328 46.9739311597403</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210320_MATAPEDIA_S2"/>
      <name>20210320_MATAPEDIA_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.6607540594603 47.7624417970085</gml:pos>
        <gml:pos>-66.6611774543063 49.0572919934234</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210320_MATANE_S2"/>
      <name>20210320_MATANE_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.6607540594603 47.7624417970085</gml:pos>
        <gml:pos>-66.6611774543063 49.0572919934234</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210319_BECANCOUR_L8"/>
      <name>20210319_BECANCOUR_L8</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.3498052019201 45.0069902282467</gml:pos>
        <gml:pos>-71.3062442560473 46.9520236760565</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210319_MONTREAL_L8"/>
      <name>20210319_MONTREAL_L8</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.1447128514721 44.9701183890901</gml:pos>
        <gml:pos>-73.1064115467082 46.2900798954508</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210319_ROUGE_S2"/>
      <name>20210319_ROUGE_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-75.0852033169403 45.0871402639967</gml:pos>
        <gml:pos>-74.0216138918046 46.4142952026938</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220419_SAGUENAY_L8_2"/>
      <name>20220419_SAGUENAY_L8_2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.894093522702 48.2354462353629</gml:pos>
        <gml:pos>-71.8172127473358 49.5520208539481</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220419_SAGUENAY_L8_1"/>
      <name>20220419_SAGUENAY_L8_1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.9085850286907 48.2694643743433</gml:pos>
        <gml:pos>-70.8568539366696 49.5781839706446</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210319_YAMASKA_L8"/>
      <name>20210319_YAMASKA_L8</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.2413171456918 45.1854219532053</gml:pos>
        <gml:pos>-72.2206749215959 46.4989957492354</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210317_MATANE_S2"/>
      <name>20210317_MATANE_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.438266299232 47.7624837604823</gml:pos>
        <gml:pos>-66.1761366947934 48.700348067556</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210317_MATAPEDIA_S2"/>
      <name>20210317_MATAPEDIA_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.438266299232 47.7624837604823</gml:pos>
        <gml:pos>-66.1761366947934 48.700348067556</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210317_BONAVENTURE_S2"/>
      <name>20210317_BONAVENTURE_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-66.3192503283551 47.7268248355509</gml:pos>
        <gml:pos>-64.8516255429255 48.6781883079509</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210310_MATANE_S2"/>
      <name>20210310_MATANE_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.6607540594603 47.7537949340679</gml:pos>
        <gml:pos>-66.1940292212852 49.0572919934234</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210310_MATAPEDIA_S2"/>
      <name>20210310_MATAPEDIA_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.6607540594603 47.7537949340679</gml:pos>
        <gml:pos>-66.1940292212852 49.0572919934234</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210310_MONTREAL_L8"/>
      <name>20210310_MONTREAL_L8</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.1447128514721 44.9701183890901</gml:pos>
        <gml:pos>-73.1064115467082 46.2900798954508</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210310_ROUGE_L8"/>
      <name>20210310_ROUGE_L8</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-75.0852033169403 45.0870508203267</gml:pos>
        <gml:pos>-74.021730635727 46.4142880835167</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210308_CHAUDIERE_S2"/>
      <name>20210308_CHAUDIERE_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.4160884187617 45.6739203020918</gml:pos>
        <gml:pos>-70.4309002842063 46.9739336547537</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210308_ST-FRANCOIS_S2"/>
      <name>20210308_ST-FRANCOIS_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.2518627404855 45.0069902282467</gml:pos>
        <gml:pos>-70.4066139430267 45.6952205395341</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210308_YAMASKA_S2"/>
      <name>20210308_YAMASKA_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.2413171456918 45.1855115891869</gml:pos>
        <gml:pos>-72.2205545886265 46.4990005499973</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210304_ROUGE_S2"/>
      <name>20210304_ROUGE_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-75.0852033169403 45.0871402639967</gml:pos>
        <gml:pos>-74.0216138918046 46.4142952026938</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210303_BECANCOUR_L8"/>
      <name>20210303_BECANCOUR_L8</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.3499365339404 45.6444052203139</gml:pos>
        <gml:pos>-71.3420929891576 46.9520200045745</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210303_CHAUDIERE_S2"/>
      <name>20210303_CHAUDIERE_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.4160884187617 45.6739203020918</gml:pos>
        <gml:pos>-70.4309002842063 46.9739336547537</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210303_MONTREAL_L8"/>
      <name>20210303_MONTREAL_L8</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.1447128514721 44.9701183890901</gml:pos>
        <gml:pos>-73.1064115467082 46.2900798954508</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210303_YAMASKA_L8"/>
      <name>20210303_YAMASKA_L8</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.2413171456918 45.1854219532053</gml:pos>
        <gml:pos>-72.2206749215959 46.4989957492354</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210125_BECANCOUR_S2"/>
      <name>20210125_BECANCOUR_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.3498052019201 45.6444997148644</gml:pos>
        <gml:pos>-71.3418417747752 46.9520273473731</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210125_MONTREAL_S2"/>
      <name>20210125_MONTREAL_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.1447128514721 44.9702079062974</gml:pos>
        <gml:pos>-73.106293360806 46.2900858347461</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210125_ST-FRANCOIS_S2"/>
      <name>20210125_ST-FRANCOIS_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.2518627404855 45.0069902282467</gml:pos>
        <gml:pos>-70.4066139430267 45.6952205395341</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210125_YAMASKA_S2"/>
      <name>20210125_YAMASKA_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.2413171456918 45.1855115891869</gml:pos>
        <gml:pos>-72.2205545886265 46.4990005499973</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210115_MONTREAL_S2"/>
      <name>20210115_MONTREAL_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.1447128514721 44.9702079062974</gml:pos>
        <gml:pos>-73.106293360806 46.2900858347461</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210115_ST-FRANCOIS_S2"/>
      <name>20210115_ST-FRANCOIS_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.2518627404855 45.0069902282467</gml:pos>
        <gml:pos>-70.4066139430267 45.6952205395341</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210115_YAMASKA_S2"/>
      <name>20210115_YAMASKA_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.2413171456918 45.1855115891869</gml:pos>
        <gml:pos>-72.2205545886265 46.4990005499973</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210110_MONTREAL_S2"/>
      <name>20210110_MONTREAL_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.1447128514721 44.9702079062974</gml:pos>
        <gml:pos>-73.106293360806 46.2900858347461</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210110_YAMASKA_S2"/>
      <name>20210110_YAMASKA_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.2413171456918 45.1855115891869</gml:pos>
        <gml:pos>-72.2205545886265 46.4990005499973</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210108_ROUGE_S2"/>
      <name>20210108_ROUGE_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-75.0852033169403 45.0871402639967</gml:pos>
        <gml:pos>-74.0216138918046 46.4142952026938</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210107_BECANCOUR_S2"/>
      <name>20210107_BECANCOUR_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.3498052019201 45.6444997148644</gml:pos>
        <gml:pos>-71.3418417747752 46.9520273473731</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20210107_CHAUDIERE_S2"/>
      <name>20210107_CHAUDIERE_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.4160884187617 45.6739203020918</gml:pos>
        <gml:pos>-70.4309002842063 46.9739336547537</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200414_MATANE_S2"/>
      <name>20200414_MATANE_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.9994256227618 48.641298468945</gml:pos>
        <gml:pos>-66.5212822052075 49.1505777554992</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200331_YAMASKA_S2"/>
      <name>20200331_YAMASKA_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.9646180020127 45.1186989830678</gml:pos>
        <gml:pos>-71.1093825996914 47.0398275493559</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200331_MONTREAL_S2"/>
      <name>20200331_MONTREAL_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-75.8593808556744 44.9185690525686</gml:pos>
        <gml:pos>-73.4440600590005 46.9296466354972</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200325_CHAUDIERE_L8"/>
      <name>20200325_CHAUDIERE_L8</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.0134382264964 44.8973098050491</gml:pos>
        <gml:pos>-69.804163180177 47.1570470412919</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200325_MATANE_S2"/>
      <name>20200325_MATANE_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.620763501413 48.6693167914255</gml:pos>
        <gml:pos>-66.1417427005035 49.2644112566658</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200325_MATAPEDIA_S2"/>
      <name>20200325_MATAPEDIA_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.6565230491906 47.7736546272309</gml:pos>
        <gml:pos>-66.1572096969432 48.7294464257661</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200321_YAMASKA_S2"/>
      <name>20200321_YAMASKA_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.2584149763332 45.1905348839093</gml:pos>
        <gml:pos>-71.598927030909 46.5329433083745</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200321_MONTREAL_S2"/>
      <name>20200321_MONTREAL_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.1269252348231 45.2063991203899</gml:pos>
        <gml:pos>-73.001833370826 46.2116288119854</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200319_CHAUDIERE_S2"/>
      <name>20200319_CHAUDIERE_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.9200364263813 45.0056821451001</gml:pos>
        <gml:pos>-70.4809881519237 46.973452306717</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200319_ST-FRANCOIS_S2"/>
      <name>20200319_ST-FRANCOIS_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.4266451424796 44.9396092637742</gml:pos>
        <gml:pos>-71.7098585841601 46.8918367963139</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200316_MONTREAL_S2"/>
      <name>20200316_MONTREAL_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.9998689354353 44.8533400442253</gml:pos>
        <gml:pos>-72.9656471276425 47.0519563518262</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200316_YAMASKA_S2"/>
      <name>20200316_YAMASKA_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.2592266274124 44.9429930752772</gml:pos>
        <gml:pos>-71.1941571515802 47.1178858831802</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200311_ROUGE_S2"/>
      <name>20200311_ROUGE_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-75.1110187828609 45.4194744841034</gml:pos>
        <gml:pos>-74.177568411711 46.5184894043491</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200308_BECANCOUR_S2"/>
      <name>20200308_BECANCOUR_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.6090928164009 45.4688779398953</gml:pos>
        <gml:pos>-71.4420209296705 46.8048235650396</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200308_CHAUDIERE_S2"/>
      <name>20200308_CHAUDIERE_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.579413810519 45.6911182139588</gml:pos>
        <gml:pos>-70.4157671717691 46.9568147029752</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200301_BECANCOUR_S2"/>
      <name>20200301_BECANCOUR_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.6090928164009 45.4688779398953</gml:pos>
        <gml:pos>-71.4420209296705 46.8048235650396</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200301_MONTREAL_S2"/>
      <name>20200301_MONTREAL_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.2819693876745 45.0476347274001</gml:pos>
        <gml:pos>-73.2117213651671 46.5109779715421</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200301_ROUGE_S2"/>
      <name>20200301_ROUGE_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-75.1110187828609 45.4194744841034</gml:pos>
        <gml:pos>-74.177568411711 46.5184894043491</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200301_YAMASKA_S2"/>
      <name>20200301_YAMASKA_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.5392160266386 45.1757942971028</gml:pos>
        <gml:pos>-72.3543460201906 46.4828105103149</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200220_MONTREAL_S2"/>
      <name>20200220_MONTREAL_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.9284268642341 45.0784449654404</gml:pos>
        <gml:pos>-72.3536375698849 46.4172226381416</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200217_BECANCOUR_S2"/>
      <name>20200217_BECANCOUR_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.5847961711691 45.1823984783413</gml:pos>
        <gml:pos>-71.1351796479363 46.8656938260967</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200217_CHAUDIERE_S2"/>
      <name>20200217_CHAUDIERE_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.579413810519 45.6911182139588</gml:pos>
        <gml:pos>-70.4157671717691 46.9568147029752</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200217_YAMASKA_S2"/>
      <name>20200217_YAMASKA_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.5392160266386 45.1757046873267</gml:pos>
        <gml:pos>-72.3540853296375 46.4828204529372</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200131_YAMASKA_S2"/>
      <name>20200131_YAMASKA_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.7073390934665 44.9591191760024</gml:pos>
        <gml:pos>-71.5460032832991 46.1310961170177</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200131_BECANCOUR_S2"/>
      <name>20200131_BECANCOUR_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.6858334778946 45.8072844529625</gml:pos>
        <gml:pos>-71.1875061262983 47.0386862837288</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200131_MONTREAL_S2"/>
      <name>20200131_MONTREAL_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-75.0002585402044 44.8850861813524</gml:pos>
        <gml:pos>-73.4549590192453 46.134105024149</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200130_CHAUDIERE_L8"/>
      <name>20200130_CHAUDIERE_L8</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.3926172542662 45.3122148515356</gml:pos>
        <gml:pos>-70.201607333539 47.1829013417004</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200129_ROUGE_S2"/>
      <name>20200129_ROUGE_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-75.1110187828609 45.5014616522029</gml:pos>
        <gml:pos>-74.1899172623365 46.5183144166957</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200121_BECANCOUR_S2"/>
      <name>20200121_BECANCOUR_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.7428876145753 45.93659554009</gml:pos>
        <gml:pos>-71.3177944215965 46.9051917146492</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200121_MONTREAL_S2_1"/>
      <name>20200121_MONTREAL_S2_1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.7794709366556 45.1397614960314</gml:pos>
        <gml:pos>-71.8710661533059 46.0826745015171</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20200121_MONTREAL_S2"/>
      <name>20200121_MONTREAL_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-75.0191939696789 45.0696676668736</gml:pos>
        <gml:pos>-73.3322286308848 46.0222501218155</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190504_SAGUENAY_S1"/>
      <name>20190504_SAGUENAY_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.9096841047796 48.2155706040563</gml:pos>
        <gml:pos>-70.921383931803 49.7770183915821</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190422_SAGUENAY_S1"/>
      <name>20190422_SAGUENAY_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.9096841047796 48.2155706040563</gml:pos>
        <gml:pos>-70.921383931803 49.7770183915821</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190419_BONAVENTURE_S1"/>
      <name>20190419_BONAVENTURE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-66.2383365353555 47.6516695928692</gml:pos>
        <gml:pos>-64.2330405512553 48.4099662118703</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190414_ST-FRANCOIS_S1"/>
      <name>20190414_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.072898048867 44.9505945942035</gml:pos>
        <gml:pos>-71.0569906122612 46.1798592375814</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190414_YAMASKA_S1"/>
      <name>20190414_YAMASKA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.5986137191563 45.0686714638062</gml:pos>
        <gml:pos>-72.1566768094658 46.2752778616</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190413_YAMASKA_S2"/>
      <name>20190413_YAMASKA_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.4942990328218 45.1593917809112</gml:pos>
        <gml:pos>-70.3445896665963 46.950482656696</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190412_RISTIGOUCHE_S1"/>
      <name>20190412_RISTIGOUCHE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.4278850090598 47.7551603273412</gml:pos>
        <gml:pos>-66.3912936158117 48.2242297916351</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190411_YAMASKA_S2"/>
      <name>20190411_YAMASKA_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.6859647196433 44.9440818858608</gml:pos>
        <gml:pos>-71.4135042550673 47.0308651954574</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190410_SAGUENAY_S1"/>
      <name>20190410_SAGUENAY_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.9096841047796 48.2155706040563</gml:pos>
        <gml:pos>-70.921383931803 49.7770183915821</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190410_ST-FRANCOIS_S1"/>
      <name>20190410_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.4058361416469 44.8754147553144</gml:pos>
        <gml:pos>-70.2001720166539 45.8419441311162</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190410_BECANCOUR_S1"/>
      <name>20190410_BECANCOUR_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.6592208971508 45.5966258016343</gml:pos>
        <gml:pos>-71.3115089314683 46.9873015218376</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190410_BATISCAN_S1"/>
      <name>20190410_BATISCAN_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.6592208971508 45.5966258016343</gml:pos>
        <gml:pos>-71.3115089314683 46.9873015218376</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190410_CHAUDIERE_S1"/>
      <name>20190410_CHAUDIERE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.579413810519 45.6911406728148</gml:pos>
        <gml:pos>-70.4157680308006 46.9568147029752</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190408_MONTREAL_S1"/>
      <name>20190408_MONTREAL_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.2819693876745 45.047657107523</gml:pos>
        <gml:pos>-73.2117234506923 46.5109779715421</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190408_ROUGE_S1"/>
      <name>20190408_ROUGE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-75.1110187828609 45.4194968588226</gml:pos>
        <gml:pos>-74.1776346056257 46.5184857597305</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190407_RISTIGOUCHE_S2"/>
      <name>20190407_RISTIGOUCHE_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.3741846594946 47.8050939072116</gml:pos>
        <gml:pos>-66.3874533634546 48.3119363292444</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190407_BONAVENTURE_S1"/>
      <name>20190407_BONAVENTURE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-66.2383365353555 47.6516695928692</gml:pos>
        <gml:pos>-64.2330405512553 48.4099662118703</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190402_BONAVENTURE_S2"/>
      <name>20190402_BONAVENTURE_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-66.3193459463148 47.8630462132233</gml:pos>
        <gml:pos>-65.1218845151978 48.5002850159654</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190402_ST-FRANCOIS_S1"/>
      <name>20190402_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.072898048867 44.9505945942035</gml:pos>
        <gml:pos>-71.0569906122612 46.1798592375814</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190402_YAMASKA_S1"/>
      <name>20190402_YAMASKA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.5986137191563 45.0686714638062</gml:pos>
        <gml:pos>-72.1566768094658 46.2752778616</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190331_RISTIGOUCHE_S1"/>
      <name>20190331_RISTIGOUCHE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.4278850090598 47.7551603273412</gml:pos>
        <gml:pos>-66.3912936158117 48.2242297916351</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190329_SAGUENAY_S1"/>
      <name>20190329_SAGUENAY_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.9096841047796 48.2155706040563</gml:pos>
        <gml:pos>-70.921383931803 49.7770183915821</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190329_ST-FRANCOIS_S1"/>
      <name>20190329_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.4058361416469 44.8754147553144</gml:pos>
        <gml:pos>-70.2001720166539 45.8419441311162</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190329_BATISCAN_S1"/>
      <name>20190329_BATISCAN_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.6592208971508 45.5966258016343</gml:pos>
        <gml:pos>-71.3115089314683 46.9873015218376</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190329_BECANCOUR_S1"/>
      <name>20190329_BECANCOUR_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.6592208971508 45.5966258016343</gml:pos>
        <gml:pos>-71.3115089314683 46.9873015218376</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190329_CHAUDIERE_S1"/>
      <name>20190329_CHAUDIERE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.579413810519 45.6911406728148</gml:pos>
        <gml:pos>-70.4157680308006 46.9568147029752</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190327_YAMASKA_S2"/>
      <name>20190327_YAMASKA_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.685969123422 44.9276029811122</gml:pos>
        <gml:pos>-71.4087847477378 47.0307999122923</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190327_MONTREAL_S2"/>
      <name>20190327_MONTREAL_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-75.0002628415026 44.9841713048716</gml:pos>
        <gml:pos>-73.4760325943738 47.027556523642</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190327_MONTREAL_S1"/>
      <name>20190327_MONTREAL_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.2819693876745 45.047657107523</gml:pos>
        <gml:pos>-73.2117234506923 46.5109779715421</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190327_ROUGE_S1"/>
      <name>20190327_ROUGE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-75.1110187828609 45.4194968588226</gml:pos>
        <gml:pos>-74.1776346056257 46.5184857597305</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190326_BONAVENTURE_S1"/>
      <name>20190326_BONAVENTURE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-66.2383365353555 47.6516695928692</gml:pos>
        <gml:pos>-64.2330405512553 48.4099662118703</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190326_RISTIGOUCHE_S2"/>
      <name>20190326_RISTIGOUCHE_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.4278850090598 47.7551603273412</gml:pos>
        <gml:pos>-66.3912936158117 48.2242297916351</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190322_ST-FRANCOIS_S1"/>
      <name>20190322_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.584793600121 45.1870766787024</gml:pos>
        <gml:pos>-71.135455510949 46.8656625281167</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190322_YAMASKA_S1"/>
      <name>20190322_YAMASKA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.2391389704892 45.1098664799827</gml:pos>
        <gml:pos>-72.1923854728471 46.3498933182243</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190322_MONTREAL_S1"/>
      <name>20190322_MONTREAL_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.6867699718859 45.035799610018</gml:pos>
        <gml:pos>-73.1745261102973 46.5413841700332</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190321_ST-FRANCOIS_S1"/>
      <name>20190321_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.072898048867 44.9505945942035</gml:pos>
        <gml:pos>-71.0569906122612 46.1798592375814</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190321_YAMASKA_S1"/>
      <name>20190321_YAMASKA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.5986137191563 45.0686714638062</gml:pos>
        <gml:pos>-72.1566768094658 46.2752778616</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190319_BATISCAN_S2"/>
      <name>20190319_BATISCAN_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.3588305580672 45.2921081822238</gml:pos>
        <gml:pos>-71.1546563766149 46.8711697566058</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190319_BECANCOUR_S2"/>
      <name>20190319_BECANCOUR_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.3588305580672 45.2921081822238</gml:pos>
        <gml:pos>-71.1546563766149 46.8711697566058</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190319_YAMASKA_S2"/>
      <name>20190319_YAMASKA_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.5810090137878 45.0462915395967</gml:pos>
        <gml:pos>-72.2266529941816 46.5308399068344</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190319_CHAUDIERE_S2"/>
      <name>20190319_CHAUDIERE_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.5794109262214 45.6911152728275</gml:pos>
        <gml:pos>-70.4157644257636 46.956811726897</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190319_RISTIGOUCHE_S1"/>
      <name>20190319_RISTIGOUCHE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.4278850090598 47.7551603273412</gml:pos>
        <gml:pos>-66.3912936158117 48.2242297916351</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190317_SAGUENAY_S1"/>
      <name>20190317_SAGUENAY_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.9096841047796 48.2155706040563</gml:pos>
        <gml:pos>-70.921383931803 49.7770183915821</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190317_ST-FRANCOIS_S1"/>
      <name>20190317_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.4058361416469 44.8754147553144</gml:pos>
        <gml:pos>-70.2001720166539 45.8419441311162</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190317_BECANCOUR_S1"/>
      <name>20190317_BECANCOUR_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.6592208971508 45.5966258016343</gml:pos>
        <gml:pos>-71.3115089314683 46.9873015218376</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190317_BATISCAN_S1"/>
      <name>20190317_BATISCAN_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.6592208971508 45.5966258016343</gml:pos>
        <gml:pos>-71.3115089314683 46.9873015218376</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190317_CHAUDIERE_S1"/>
      <name>20190317_CHAUDIERE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.579413810519 45.6911406728148</gml:pos>
        <gml:pos>-70.4157680308006 46.9568147029752</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190315_MONTREAL_S1"/>
      <name>20190315_MONTREAL_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.2819693876745 45.047657107523</gml:pos>
        <gml:pos>-73.2117234506923 46.5109779715421</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190315_ROUGE_S1"/>
      <name>20190315_ROUGE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-75.1110187828609 45.4194968588226</gml:pos>
        <gml:pos>-74.1776346056257 46.5184857597305</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190314_BONAVENTURE_S1"/>
      <name>20190314_BONAVENTURE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-66.2383365353555 47.6516695928692</gml:pos>
        <gml:pos>-64.2330405512553 48.4099662118703</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190310_MONTREAL_S1"/>
      <name>20190310_MONTREAL_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.6867699718859 45.035799610018</gml:pos>
        <gml:pos>-73.1745261102973 46.5413841700332</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190310_ST-FRANCOIS_S1"/>
      <name>20190310_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.584793600121 45.1870766787024</gml:pos>
        <gml:pos>-71.135455510949 46.8656625281167</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190310_YAMASKA_S1"/>
      <name>20190310_YAMASKA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.2391389704892 45.1098664799827</gml:pos>
        <gml:pos>-72.1923854728471 46.3498933182243</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190309_ST-FRANCOIS_S1"/>
      <name>20190309_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.072898048867 44.9505945942035</gml:pos>
        <gml:pos>-71.0569906122612 46.1798592375814</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190309_YAMASKA_S1"/>
      <name>20190309_YAMASKA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.5986137191563 45.0686714638062</gml:pos>
        <gml:pos>-72.1566768094658 46.2752778616</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190309_BATISCAN_S2"/>
      <name>20190309_BATISCAN_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.3588305580672 45.2921081822238</gml:pos>
        <gml:pos>-71.1546563766149 46.8711697566058</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190309_BECANCOUR_S2"/>
      <name>20190309_BECANCOUR_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.3588305580672 45.2921081822238</gml:pos>
        <gml:pos>-71.1546563766149 46.8711697566058</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190309_YAMASKA_S2"/>
      <name>20190309_YAMASKA_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.5810090137878 45.0462915395967</gml:pos>
        <gml:pos>-72.2266529941816 46.5308399068344</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190309_CHAUDIERE_S2"/>
      <name>20190309_CHAUDIERE_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.5794109262214 45.6911152728275</gml:pos>
        <gml:pos>-70.4157644244804 46.9568117269217</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190305_ST-FRANCOIS_S1"/>
      <name>20190305_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.4058361416469 44.8754147553144</gml:pos>
        <gml:pos>-70.2001720166539 45.8419441311162</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190305_BATISCAN_S1"/>
      <name>20190305_BATISCAN_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.6592208971508 45.5966258016343</gml:pos>
        <gml:pos>-71.3115089314683 46.9873015218376</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190305_BECANCOUR_S1"/>
      <name>20190305_BECANCOUR_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.6592208971508 45.5966258016343</gml:pos>
        <gml:pos>-71.3115089314683 46.9873015218376</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190305_CHAUDIERE_S1"/>
      <name>20190305_CHAUDIERE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.579413810519 45.6911406728148</gml:pos>
        <gml:pos>-70.4157680308006 46.9568147029752</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190303_MONTREAL_S1"/>
      <name>20190303_MONTREAL_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.2819693876745 45.047657107523</gml:pos>
        <gml:pos>-73.2117234506923 46.5109779715421</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190303_ROUGE_S1"/>
      <name>20190303_ROUGE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-75.1110187828609 45.4194968588226</gml:pos>
        <gml:pos>-74.1776346056257 46.5184857597305</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190302_BONAVENTURE_S1"/>
      <name>20190302_BONAVENTURE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-66.2383365353555 47.6516695928692</gml:pos>
        <gml:pos>-64.2330405512553 48.4099662118703</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190227_BECANCOUR_S2"/>
      <name>20190227_BECANCOUR_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.191014498747 45.9005761550114</gml:pos>
        <gml:pos>-72.2963156588942 46.9318259128839</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190227_CHAUDIERE_S2"/>
      <name>20190227_CHAUDIERE_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.373514643052 45.9363943386118</gml:pos>
        <gml:pos>-70.7530009651261 46.9701181293276</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190226_MONTREAL_S1"/>
      <name>20190226_MONTREAL_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.6867699718859 45.035799610018</gml:pos>
        <gml:pos>-73.1745261102973 46.5413841700332</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190226_ST-FRANCOIS_S1"/>
      <name>20190226_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.584793600121 45.1870766787024</gml:pos>
        <gml:pos>-71.135455510949 46.8656625281167</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190226_YAMASKA_S1"/>
      <name>20190226_YAMASKA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.2391389704892 45.1098664799827</gml:pos>
        <gml:pos>-72.1923854728471 46.3498933182243</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190225_ST-FRANCOIS_S1"/>
      <name>20190225_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.072898048867 44.9505945942035</gml:pos>
        <gml:pos>-71.0569906122612 46.1798592375814</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190225_YAMASKA_S1"/>
      <name>20190225_YAMASKA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.5986137191563 45.0686714638062</gml:pos>
        <gml:pos>-72.1566768094658 46.2752778616</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190221_ST-FRANCOIS_S1"/>
      <name>20190221_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.4058361416469 44.8754147553144</gml:pos>
        <gml:pos>-70.2001720166539 45.8419441311162</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190221_BATISCAN_S1"/>
      <name>20190221_BATISCAN_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.6592208971508 45.5966258016343</gml:pos>
        <gml:pos>-71.3115089314683 46.9873015218376</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190221_BECANCOUR_S1"/>
      <name>20190221_BECANCOUR_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.6592208971508 45.5966258016343</gml:pos>
        <gml:pos>-71.3115089314683 46.9873015218376</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190221_CHAUDIERE_S1"/>
      <name>20190221_CHAUDIERE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.579413810519 45.6911406728148</gml:pos>
        <gml:pos>-70.4157680308006 46.9568147029752</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190219_MONTREAL_S1"/>
      <name>20190219_MONTREAL_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.2819693876745 45.047657107523</gml:pos>
        <gml:pos>-73.2117234506923 46.5109779715421</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190219_ROUGE_S1"/>
      <name>20190219_ROUGE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-75.1110187828609 45.4194968588226</gml:pos>
        <gml:pos>-74.1776346056257 46.5184857597305</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190218_BONAVENTURE_S1"/>
      <name>20190218_BONAVENTURE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-66.2383365353555 47.6516695928692</gml:pos>
        <gml:pos>-64.2330405512553 48.4099662118703</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190213_ST-FRANCOIS_S1"/>
      <name>20190213_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.072898048867 44.9505945942035</gml:pos>
        <gml:pos>-71.0569906122612 46.1798592375814</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190213_YAMASKA_S1"/>
      <name>20190213_YAMASKA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.5986137191563 45.0686714638062</gml:pos>
        <gml:pos>-72.1566768094658 46.2752778616</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190209_ST-FRANCOIS_S1"/>
      <name>20190209_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.4058361416469 44.8754147553144</gml:pos>
        <gml:pos>-70.2001720166539 45.8419441311162</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190209_BATISCAN_S1"/>
      <name>20190209_BATISCAN_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.6592208971508 45.5966258016343</gml:pos>
        <gml:pos>-71.3115089314683 46.9873015218376</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190209_BECANCOUR_S1"/>
      <name>20190209_BECANCOUR_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.6592208971508 45.5966258016343</gml:pos>
        <gml:pos>-71.3115089314683 46.9873015218376</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190209_CHAUDIERE_S1"/>
      <name>20190209_CHAUDIERE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.579413810519 45.6911406728148</gml:pos>
        <gml:pos>-70.4157680308006 46.9568147029752</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190207_MONTREAL_S1"/>
      <name>20190207_MONTREAL_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.2819693876745 45.047657107523</gml:pos>
        <gml:pos>-73.2117234506923 46.5109779715421</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190207_ROUGE_S1"/>
      <name>20190207_ROUGE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-75.111018788497 45.4194968615029</gml:pos>
        <gml:pos>-74.1776346110996 46.5184857624528</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190206_BONAVENTURE_S1"/>
      <name>20190206_BONAVENTURE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-65.7770688578905 47.9021150731494</gml:pos>
        <gml:pos>-64.8949636990485 48.3992815114995</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190202_MONTREAL_S1"/>
      <name>20190202_MONTREAL_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.6867699774538 45.0357996083285</gml:pos>
        <gml:pos>-73.1745261157653 46.5413841684038</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190202_ST-FRANCOIS_S1"/>
      <name>20190202_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.5847935955877 45.1870766819892</gml:pos>
        <gml:pos>-71.1354555064646 46.8656625313596</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190202_YAMASKA_S1"/>
      <name>20190202_YAMASKA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.2391389660463 45.1098664832981</gml:pos>
        <gml:pos>-72.1923854684378 46.349893321511</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190201_MONTREAL_L8"/>
      <name>20190201_MONTREAL_L8</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-75.9791297328453 44.7878784905217</gml:pos>
        <gml:pos>-72.9794012970569 47.2509875698435</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190201_ST-FRANCOIS_S1"/>
      <name>20190201_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.07289804212 44.9505945903566</gml:pos>
        <gml:pos>-71.0569906058146 46.1798592336053</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190201_YAMASKA_S1"/>
      <name>20190201_YAMASKA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.5986137222851 45.0686714612366</gml:pos>
        <gml:pos>-72.1566768125998 46.2752778590625</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190128_ST-FRANCOIS_S1"/>
      <name>20190128_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.4058361365261 44.8754147538974</gml:pos>
        <gml:pos>-70.2001720116821 45.8419441295916</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190128_BATISCAN_S2"/>
      <name>20190128_BATISCAN_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.1369878751547 44.9580669930884</gml:pos>
        <gml:pos>-71.3081023335074 46.8605469351382</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190128_BECANCOUR_S2"/>
      <name>20190128_BECANCOUR_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.1369878751547 44.9580669930884</gml:pos>
        <gml:pos>-71.3081023335074 46.8605469351382</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190128_CHAUDIERE_S2"/>
      <name>20190128_CHAUDIERE_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.5794044734064 45.691151826202</gml:pos>
        <gml:pos>-70.415757281041 46.9568482938348</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190128_BECANCOUR_S1"/>
      <name>20190128_BECANCOUR_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.6592209000221 45.5966258016728</gml:pos>
        <gml:pos>-71.3115089342635 46.987301521908</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190128_BATISCAN_S1"/>
      <name>20190128_BATISCAN_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.6592209000221 45.5966258016728</gml:pos>
        <gml:pos>-71.3115089342635 46.987301521908</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190128_CHAUDIERE_S1"/>
      <name>20190128_CHAUDIERE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.5794138133883 45.691140672882</gml:pos>
        <gml:pos>-70.4157680335987 46.956814703071</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190126_MONTREAL_S1"/>
      <name>20190126_MONTREAL_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.2820401276521 45.047635003643</gml:pos>
        <gml:pos>-73.2117927444293 46.5109563356293</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190126_ROUGE_S1"/>
      <name>20190126_ROUGE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-75.111029077948 45.4194300916256</gml:pos>
        <gml:pos>-74.1776459330601 46.5184189264499</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190121_MONTREAL_S1"/>
      <name>20190121_MONTREAL_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.6867477196978 45.0358197885689</gml:pos>
        <gml:pos>-73.1745038566771 46.5414041451102</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190121_ST-FRANCOIS_S1"/>
      <name>20190121_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.5847736019589 45.1870547184051</gml:pos>
        <gml:pos>-71.1354367738345 46.8656402674724</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190121_YAMASKA_S1"/>
      <name>20190121_YAMASKA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.2390681759733 45.1098998295133</gml:pos>
        <gml:pos>-72.1923156174066 46.3499261656759</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190120_ST-FRANCOIS_S1"/>
      <name>20190120_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.9232617705267 44.9515421805066</gml:pos>
        <gml:pos>-71.0821740165091 46.1737565850669</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190120_YAMASKA_S1"/>
      <name>20190120_YAMASKA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.5992263046767 45.0618845924191</gml:pos>
        <gml:pos>-72.1769466898859 46.2677582571381</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190116_BATISCAN_S1"/>
      <name>20190116_BATISCAN_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.6759694117779 45.5965980575817</gml:pos>
        <gml:pos>-71.3115089912116 47.1838326611162</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190116_BECANCOUR_S1"/>
      <name>20190116_BECANCOUR_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.6759694117779 45.5965980575817</gml:pos>
        <gml:pos>-71.3115089912116 47.1838326611162</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190116_CHAUDIERE_S1"/>
      <name>20190116_CHAUDIERE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.5794044728491 45.6911742837121</gml:pos>
        <gml:pos>-70.4157581395563 46.9568482924791</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190114_MONTREAL_S1"/>
      <name>20190114_MONTREAL_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.2819693899662 45.0476571056823</gml:pos>
        <gml:pos>-73.2117234529609 46.5109779697135</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190114_ROUGE_S1"/>
      <name>20190114_ROUGE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-75.1109601518262 45.4194713558191</gml:pos>
        <gml:pos>-74.1775776171056 46.5184598242147</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190113_BECANCOUR_S2"/>
      <name>20190113_BECANCOUR_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.5048359492847 45.9315427589211</gml:pos>
        <gml:pos>-70.881976211353 46.9671412199777</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190113_CHAUDIERE_S2"/>
      <name>20190113_CHAUDIERE_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.627010194003 45.9358884705901</gml:pos>
        <gml:pos>-70.1498287236889 46.9568112582338</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190109_MONTREAL_S1"/>
      <name>20190109_MONTREAL_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.6867834259114 45.0358422056274</gml:pos>
        <gml:pos>-73.1745379298677 46.541427037042</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190109_ST-FRANCOIS_S1"/>
      <name>20190109_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.5847961651653 45.1823984784991</gml:pos>
        <gml:pos>-71.1352113998929 46.865692969099</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190109_YAMASKA_S1"/>
      <name>20190109_YAMASKA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.2391419099411 45.1098967794462</gml:pos>
        <gml:pos>-72.1923877183318 46.3499237117542</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190108_ST-FRANCOIS_S1"/>
      <name>20190108_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.0729752563802 44.9506017721518</gml:pos>
        <gml:pos>-71.0570658451144 46.1798678196951</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20190108_YAMASKA_S1"/>
      <name>20190108_YAMASKA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.5986693103705 45.0686565082946</gml:pos>
        <gml:pos>-72.1408937998553 46.2758503104397</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20180429_MATAPEDIA_S1"/>
      <name>20180429_MATAPEDIA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.4277772661651 47.7551228274362</gml:pos>
        <gml:pos>-66.3911856868612 48.2241932870343</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20180423_MATAPEDIA_L8"/>
      <name>20180423_MATAPEDIA_L8</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.4138280842049 47.6179436991858</gml:pos>
        <gml:pos>-66.1982989186964 48.2777934299251</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20180417_MATAPEDIA_S1"/>
      <name>20180417_MATAPEDIA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.4278603030585 47.7551116412601</gml:pos>
        <gml:pos>-66.3912697364839 48.2241813048351</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20180415_MATAPEDIA_S2B"/>
      <name>20180415_MATAPEDIA_S2B</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.6574011344441 47.7310328660584</gml:pos>
        <gml:pos>-66.1537118475382 48.7449841080925</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20180415_CHAUDIERE_S1"/>
      <name>20180415_CHAUDIERE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.4059041660258 45.7967336636803</gml:pos>
        <gml:pos>-70.3810143013396 46.958004345934</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20180415_BATISCAN_S1"/>
      <name>20180415_BATISCAN_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.7522620239427 46.0762517467674</gml:pos>
        <gml:pos>-71.7237788605752 46.8734599298411</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20180408_CHAUDIERE_S2B"/>
      <name>20180408_CHAUDIERE_S2B</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.6270101940594 45.9358884716571</gml:pos>
        <gml:pos>-70.1642741275982 46.9565728458302</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20180408_ST-FRANCOIS_S1"/>
      <name>20180408_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.3658241842626 45.407251510231</gml:pos>
        <gml:pos>-72.0844854486887 46.2454193809334</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20180408_MONTREAL_S1"/>
      <name>20180408_MONTREAL_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.500157432035 45.1252201365633</gml:pos>
        <gml:pos>-73.2256543561517 45.9291595192947</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20180407_ST-FRANCOIS_S1"/>
      <name>20180407_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.598638234821 45.0685744096052</gml:pos>
        <gml:pos>-71.8035968651013 46.2876560939314</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20180405_MATAPEDIA_S1"/>
      <name>20180405_MATAPEDIA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.4277920566485 47.7551563624077</gml:pos>
        <gml:pos>-66.3911998872761 48.2242267058734</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20180403_CHAUDIERE_S1"/>
      <name>20180403_CHAUDIERE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.4058568898258 45.7967396023507</gml:pos>
        <gml:pos>-70.3809679614474 46.9580098821157</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20180403_BATISCAN_S1"/>
      <name>20180403_BATISCAN_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.7522150135822 46.0762582963729</gml:pos>
        <gml:pos>-71.7237324054211 46.8734660761913</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20180401_MONTREAL_S1"/>
      <name>20180401_MONTREAL_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.500165343022 45.1252704296562</gml:pos>
        <gml:pos>-73.2256608933812 45.9292099719011</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20180327_MONTREAL_S2B"/>
      <name>20180327_MONTREAL_S2B</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.7493993503621 44.9672017078406</gml:pos>
        <gml:pos>-71.2373031074475 46.8639898629291</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20180327_MONTREAL_S1"/>
      <name>20180327_MONTREAL_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.5001891789357 45.1252328538946</gml:pos>
        <gml:pos>-73.2256853534612 45.9291726011836</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20180327_BATISCAN_S1"/>
      <name>20180327_BATISCAN_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.8343637266087 45.9902909311211</gml:pos>
        <gml:pos>-71.8719190781508 46.6066412403428</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20180327_ST-FRANCOIS_S1"/>
      <name>20180327_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.3658558472771 45.4072645807301</gml:pos>
        <gml:pos>-72.084516311151 46.2454328232686</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20180326_ST-FRANCOIS_S1"/>
      <name>20180326_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.5986472237645 45.0685813349058</gml:pos>
        <gml:pos>-71.8036054148133 46.2876631734555</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20180324_GASPESIE_S1"/>
      <name>20180324_GASPESIE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.4278603030585 47.7551116412601</gml:pos>
        <gml:pos>-66.3912697364839 48.2241813048351</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20180322_CHAUDIERE_S1"/>
      <name>20180322_CHAUDIERE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.4059194252022 45.7967612971138</gml:pos>
        <gml:pos>-70.381028653017 46.9580321669644</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20180322_BATISCAN_S1"/>
      <name>20180322_BATISCAN_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.7521141756136 46.076285771182</gml:pos>
        <gml:pos>-71.7236324809364 46.8734927033312</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20180322_GASPESIE_S2B"/>
      <name>20180322_GASPESIE_S2B</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.6573806553314 47.7319262557588</gml:pos>
        <gml:pos>-66.140611941282 48.7449841080925</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20180320_MONTREAL_S1"/>
      <name>20180320_MONTREAL_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.5001109591314 45.1252851675823</gml:pos>
        <gml:pos>-73.2256068736221 45.929224138545</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20180320_CHAUDIERE_S2B"/>
      <name>20180320_CHAUDIERE_S2B</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.6270101940594 45.9358884716571</gml:pos>
        <gml:pos>-70.1498287237126 46.9568112593032</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20180317_LAC-ST-PIERRE_S2B"/>
      <name>20180317_LAC-ST-PIERRE_S2B</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.6859647196713 45.9600740136391</gml:pos>
        <gml:pos>-72.1688716439581 47.0078651207912</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20180317_LAC-ST-LOUIS_S2B"/>
      <name>20180317_LAC-ST-LOUIS_S2B</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-75.0002585397383 45.0705626656452</gml:pos>
        <gml:pos>-73.4858340065895 46.1334669409727</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20180317_RICHELIEU_S2B"/>
      <name>20180317_RICHELIEU_S2B</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.707467964206 45.0618406448064</gml:pos>
        <gml:pos>-72.2168540996679 46.1083428972335</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20180317_STE-ANNE_S2B"/>
      <name>20180317_STE-ANNE_S2B</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.373514643054 45.9363943396786</gml:pos>
        <gml:pos>-70.881976211323 46.9671412210461</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20180317_ST-FRANCOIS_S2B"/>
      <name>20180317_ST-FRANCOIS_S2B</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.4164511589601 45.0388717711849</gml:pos>
        <gml:pos>-70.9504887893546 46.0686375032659</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20180318_MONTREAL_L8"/>
      <name>20180318_MONTREAL_L8</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.5001912280338 45.1253787547941</gml:pos>
        <gml:pos>-73.2255385627207 45.929214222286</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20180314_ST-FRANCOIS_S1"/>
      <name>20180314_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.3658411070244 45.407290303299</gml:pos>
        <gml:pos>-72.084501134282 46.2454584189731</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20180312_MATAPEDIA_S1"/>
      <name>20180312_MATAPEDIA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.4278850050868 47.755160326091</gml:pos>
        <gml:pos>-66.3912936118291 48.2242297904216</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20180310_BATISCAN_S1"/>
      <name>20180310_BATISCAN_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.7521420740504 46.0762896807138</gml:pos>
        <gml:pos>-71.7236598887701 46.8734968622349</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20180310_CHAUDIERE_S1"/>
      <name>20180310_CHAUDIERE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.4059472669598 45.7967655635581</gml:pos>
        <gml:pos>-70.3810557843372 46.9580366855972</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20180308_MONTREAL_S1"/>
      <name>20180308_MONTREAL_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.5001480852641 45.1252851654454</gml:pos>
        <gml:pos>-73.2256434978067 45.9292245410621</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20180303_BATISCAN_S1"/>
      <name>20180303_BATISCAN_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.8343646552297 45.9903250289661</gml:pos>
        <gml:pos>-71.8719193381453 46.6066753806189</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20180303_ST-FRANCOIS_S1"/>
      <name>20180303_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.3658571336369 45.4072986348101</gml:pos>
        <gml:pos>-72.0845167120303 46.2454669411876</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20180303_MONTREAL_S1"/>
      <name>20180303_MONTREAL_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.5001912299853 45.1252668706345</gml:pos>
        <gml:pos>-73.225686519959 45.9292066898485</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20180302_YAMASKA_S1"/>
      <name>20180302_YAMASKA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.5985904020968 45.0686150844902</gml:pos>
        <gml:pos>-71.8035486219035 46.2876961100163</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20180227_CHAUDIERE_S1"/>
      <name>20180227_CHAUDIERE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.4058918441636 45.7967714586461</gml:pos>
        <gml:pos>-70.3810014810469 46.9580421067575</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20180227_BATISCAN_S1"/>
      <name>20180227_BATISCAN_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.7520869335689 46.0762962915383</gml:pos>
        <gml:pos>-71.7236054216588 46.8735029986803</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20180130_YAMASKA_R2"/>
      <name>20180130_YAMASKA_R2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.3367469813289 45.7241965318676</gml:pos>
        <gml:pos>-72.7165135556736 46.1961164534588</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20180125_YAMASKA_S1"/>
      <name>20180125_YAMASKA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.164026960073 45.4236353207477</gml:pos>
        <gml:pos>-71.7681298747507 46.3978912121853</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20180125_YAMASKA_R2"/>
      <name>20180125_YAMASKA_R2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.4353313965899 45.7184581634789</gml:pos>
        <gml:pos>-72.7097674157012 46.2009418785365</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20180123_YAMASKA_R2"/>
      <name>20180123_YAMASKA_R2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.3179284078427 45.904827615218</gml:pos>
        <gml:pos>-72.721074914875 46.2723659681724</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220327_MATAPEDIA_S1"/>
      <name>20220327_MATAPEDIA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.4278850050651 47.7551603263604</gml:pos>
        <gml:pos>-66.3912936118013 48.2242297906914</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220315_MATAPEDIA_S1"/>
      <name>20220315_MATAPEDIA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.4278850050651 47.7551603263604</gml:pos>
        <gml:pos>-66.3912936118013 48.2242297906914</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20220303_MATAPEDIA_S1"/>
      <name>20220303_MATAPEDIA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.4278850050651 47.7551603263604</gml:pos>
        <gml:pos>-66.3912936118013 48.2242297906914</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230413_BECANCOUR_S1"/>
      <name>20230413_BECANCOUR_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.6090928164009 45.4688779398953</gml:pos>
        <gml:pos>-71.4420528587653 46.8048226147754</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230401_BECANCOUR_S1"/>
      <name>20230401_BECANCOUR_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.6090928164009 45.4688779398953</gml:pos>
        <gml:pos>-71.4420528587653 46.8048226147754</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230320_BECANCOUR_S1"/>
      <name>20230320_BECANCOUR_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.6090928164009 45.4688779398953</gml:pos>
        <gml:pos>-71.4420528587653 46.8048226147754</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230308_BECANCOUR_S1"/>
      <name>20230308_BECANCOUR_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.6090928164009 45.4688779398953</gml:pos>
        <gml:pos>-71.4420528587653 46.8048226147754</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230224_BECANCOUR_S1"/>
      <name>20230224_BECANCOUR_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.6090928164009 45.4688779398953</gml:pos>
        <gml:pos>-71.4420528587653 46.8048226147754</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230212_BECANCOUR_S1"/>
      <name>20230212_BECANCOUR_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.6090928164009 45.4688779398953</gml:pos>
        <gml:pos>-71.4420528587653 46.8048226147754</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230131_BECANCOUR_S1"/>
      <name>20230131_BECANCOUR_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.6090928164009 45.4688779398953</gml:pos>
        <gml:pos>-71.4420528587653 46.8048226147754</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230119_BECANCOUR_S1"/>
      <name>20230119_BECANCOUR_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.6090928164009 45.4688779398953</gml:pos>
        <gml:pos>-71.4420528587653 46.8048226147754</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230107_BECANCOUR_S1"/>
      <name>20230107_BECANCOUR_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.6090928164009 45.4688779398953</gml:pos>
        <gml:pos>-71.4420528587653 46.8048226147754</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230410_BONAVENTURE_S1"/>
      <name>20230410_BONAVENTURE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-66.2383365353555 47.6516695928692</gml:pos>
        <gml:pos>-64.2330405512553 48.4099662118703</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230329_BONAVENTURE_S1"/>
      <name>20230329_BONAVENTURE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-66.2383365353555 47.6516695928692</gml:pos>
        <gml:pos>-64.2330405512553 48.4099662118703</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230317_BONAVENTURE_S1"/>
      <name>20230317_BONAVENTURE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-66.2383365353555 47.6516695928692</gml:pos>
        <gml:pos>-64.2330405512553 48.4099662118703</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230305_BONAVENTURE_S1"/>
      <name>20230305_BONAVENTURE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-66.2383365353555 47.6516695928692</gml:pos>
        <gml:pos>-64.2330405512553 48.4099662118703</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230405_CHAUDIERE_S1"/>
      <name>20230405_CHAUDIERE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.5794138131475 45.6911406727393</gml:pos>
        <gml:pos>-70.415768033367 46.9568147029257</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230401_CHAUDIERE_S1"/>
      <name>20230401_CHAUDIERE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.5794138131475 45.6911406727393</gml:pos>
        <gml:pos>-70.415768033367 46.9568147029257</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230320_CHAUDIERE_S1"/>
      <name>20230320_CHAUDIERE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.5794138131475 45.6911406727393</gml:pos>
        <gml:pos>-70.415768033367 46.9568147029257</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230308_CHAUDIERE_S1"/>
      <name>20230308_CHAUDIERE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.5794138131475 45.6911406727393</gml:pos>
        <gml:pos>-70.415768033367 46.9568147029257</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230224_CHAUDIERE_S1"/>
      <name>20230224_CHAUDIERE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.5794138131475 45.6911406727393</gml:pos>
        <gml:pos>-70.415768033367 46.9568147029257</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230212_CHAUDIERE_S1"/>
      <name>20230212_CHAUDIERE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.5794138131475 45.6911406727393</gml:pos>
        <gml:pos>-70.415768033367 46.9568147029257</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230131_CHAUDIERE_S1"/>
      <name>20230131_CHAUDIERE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.5794138131475 45.6911406727393</gml:pos>
        <gml:pos>-70.415768033367 46.9568147029257</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230119_CHAUDIERE_S1"/>
      <name>20230119_CHAUDIERE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.5794138131475 45.6911406727393</gml:pos>
        <gml:pos>-70.415768033367 46.9568147029257</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230107_CHAUDIERE_S1"/>
      <name>20230107_CHAUDIERE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.5794138131475 45.6911406727393</gml:pos>
        <gml:pos>-70.415768033367 46.9568147029257</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230415_MATANE_S1"/>
      <name>20230415_MATANE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.8089787788585 48.4740655773602</gml:pos>
        <gml:pos>-66.8479347586611 49.1196014562819</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230403_MATANE_S1"/>
      <name>20230403_MATANE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.8089787788585 48.4740655773602</gml:pos>
        <gml:pos>-66.8479347586611 49.1196014562819</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230322_MATANE_S1"/>
      <name>20230322_MATANE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.8089787788585 48.4740655773602</gml:pos>
        <gml:pos>-66.8479347586611 49.1196014562819</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230310_MATANE_S1"/>
      <name>20230310_MATANE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.8089787788585 48.4740655773602</gml:pos>
        <gml:pos>-66.8479347586611 49.1196014562819</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230415_MATAPEDIA_S1"/>
      <name>20230415_MATAPEDIA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.4278850050651 47.7551603263604</gml:pos>
        <gml:pos>-66.3912936118013 48.2242297906914</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230403_MATAPEDIA_S1"/>
      <name>20230403_MATAPEDIA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.4278850050651 47.7551603263604</gml:pos>
        <gml:pos>-66.3912936118013 48.2242297906914</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230322_MATAPEDIA_S1"/>
      <name>20230322_MATAPEDIA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.4278850050651 47.7551603263604</gml:pos>
        <gml:pos>-66.3912936118013 48.2242297906914</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230310_MATAPEDIA_S1"/>
      <name>20230310_MATAPEDIA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.4278850050651 47.7551603263604</gml:pos>
        <gml:pos>-66.3912936118013 48.2242297906914</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230406_MONTREAL_S1"/>
      <name>20230406_MONTREAL_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.6867834263541 45.0358422058121</gml:pos>
        <gml:pos>-73.3017051911075 46.5352647560344</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230330_MONTREAL_S1"/>
      <name>20230330_MONTREAL_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.2819693876745 45.047657107523</gml:pos>
        <gml:pos>-73.2117234506923 46.5109779715421</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230325_MONTREAL_S1"/>
      <name>20230325_MONTREAL_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.6867834263541 45.0358422058121</gml:pos>
        <gml:pos>-73.3017051911075 46.5352647560344</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230318_MONTREAL_S1"/>
      <name>20230318_MONTREAL_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.2819693876745 45.047657107523</gml:pos>
        <gml:pos>-73.2117234506923 46.5109779715421</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230313_MONTREAL_S1"/>
      <name>20230313_MONTREAL_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.6867834263541 45.0358422058121</gml:pos>
        <gml:pos>-73.3017051911075 46.5352647560344</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230306_MONTREAL_S1"/>
      <name>20230306_MONTREAL_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.2819693876745 45.047657107523</gml:pos>
        <gml:pos>-73.2117234506923 46.5109779715421</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230301_MONTREAL_S1"/>
      <name>20230301_MONTREAL_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.6867834263541 45.0358422058121</gml:pos>
        <gml:pos>-73.3017051911075 46.5352647560344</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230222_MONTREAL_S1"/>
      <name>20230222_MONTREAL_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.2819693876745 45.047657107523</gml:pos>
        <gml:pos>-73.2117234506923 46.5109779715421</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230217_MONTREAL_S1"/>
      <name>20230217_MONTREAL_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.6867834263541 45.0358422058121</gml:pos>
        <gml:pos>-73.3017051911075 46.5352647560344</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230210_MONTREAL_S1"/>
      <name>20230210_MONTREAL_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.2819693876745 45.047657107523</gml:pos>
        <gml:pos>-73.2117234506923 46.5109779715421</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230205_MONTREAL_S1"/>
      <name>20230205_MONTREAL_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.6867834263541 45.0358422058121</gml:pos>
        <gml:pos>-73.3017051911075 46.5352647560344</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230129_MONTREAL_S1"/>
      <name>20230129_MONTREAL_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.2819693876745 45.047657107523</gml:pos>
        <gml:pos>-73.2117234506923 46.5109779715421</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230124_MONTREAL_S1"/>
      <name>20230124_MONTREAL_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.6867834263541 45.0358422058121</gml:pos>
        <gml:pos>-73.3017051911075 46.5352647560344</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230117_MONTREAL_S1"/>
      <name>20230117_MONTREAL_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.2819693876745 45.047657107523</gml:pos>
        <gml:pos>-73.2117234506923 46.5109779715421</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230112_MONTREAL_S1"/>
      <name>20230112_MONTREAL_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.6867834263541 45.0358422058121</gml:pos>
        <gml:pos>-73.3017051911075 46.5352647560344</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230105_MONTREAL_S1"/>
      <name>20230105_MONTREAL_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.2819693876745 45.047657107523</gml:pos>
        <gml:pos>-73.2117234506923 46.5109779715421</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230330_ROUGE_S1"/>
      <name>20230330_ROUGE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-75.1110187828609 45.4194968588226</gml:pos>
        <gml:pos>-74.1776346056257 46.5184857597305</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230318_ROUGE_S1"/>
      <name>20230318_ROUGE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-75.1110187828609 45.4194968588226</gml:pos>
        <gml:pos>-74.1776346056257 46.5184857597305</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230306_ROUGE_S1"/>
      <name>20230306_ROUGE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-75.1110187828609 45.4194968588226</gml:pos>
        <gml:pos>-74.1776346056257 46.5184857597305</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230222_ROUGE_S1"/>
      <name>20230222_ROUGE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-75.1110187828609 45.4194968588226</gml:pos>
        <gml:pos>-74.1776346056257 46.5184857597305</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230210_ROUGE_S1"/>
      <name>20230210_ROUGE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-75.1110187828609 45.4194968588226</gml:pos>
        <gml:pos>-74.1776346056257 46.5184857597305</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230129_ROUGE_S1"/>
      <name>20230129_ROUGE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-75.1110187828609 45.4194968588226</gml:pos>
        <gml:pos>-74.1776346056257 46.5184857597305</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230117_ROUGE_S1"/>
      <name>20230117_ROUGE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-75.1110187828609 45.4194968588226</gml:pos>
        <gml:pos>-74.1776346056257 46.5184857597305</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230105_ROUGE_S1"/>
      <name>20230105_ROUGE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-75.1110187828609 45.4194968588226</gml:pos>
        <gml:pos>-74.1776346056257 46.5184857597305</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230418_SAGUENAY_S1"/>
      <name>20230418_SAGUENAY_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.9096841047796 48.2155706040563</gml:pos>
        <gml:pos>-70.921383931803 49.7770183915821</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230413_SAGUENAY_S1"/>
      <name>20230413_SAGUENAY_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.9096841047796 48.2155706040563</gml:pos>
        <gml:pos>-70.921383931803 49.7770183915821</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230401_SAGUENAY_S1"/>
      <name>20230401_SAGUENAY_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.9096841047796 48.2155706040563</gml:pos>
        <gml:pos>-70.921383931803 49.7770183915821</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230320_SAGUENAY_S1"/>
      <name>20230320_SAGUENAY_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.9096841047796 48.2155706040563</gml:pos>
        <gml:pos>-70.921383931803 49.7770183915821</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230308_SAGUENAY_S1"/>
      <name>20230308_SAGUENAY_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.9096841047796 48.2155706040563</gml:pos>
        <gml:pos>-70.921383931803 49.7770183915821</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230405_ST-FRANCOIS_S1"/>
      <name>20230405_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.5847961711691 45.1823984783413</gml:pos>
        <gml:pos>-71.1352114057111 46.8656929690115</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230401_ST-FRANCOIS_S1"/>
      <name>20230401_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.4058361416469 44.8754147553144</gml:pos>
        <gml:pos>-70.2001720166539 45.8419441311162</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230325_ST-FRANCOIS_S1"/>
      <name>20230325_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.5847961711691 45.1823984783413</gml:pos>
        <gml:pos>-71.1352114057111 46.8656929690115</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230324_ST-FRANCOIS_S1"/>
      <name>20230324_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.2863677536981 44.9818828815984</gml:pos>
        <gml:pos>-71.0569962655105 46.1798592375814</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230320_ST-FRANCOIS_S1"/>
      <name>20230320_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.4058361416469 44.8754147553144</gml:pos>
        <gml:pos>-70.2001720166539 45.8419441311162</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230313_ST-FRANCOIS_S1"/>
      <name>20230313_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.5847961711691 45.1823984783413</gml:pos>
        <gml:pos>-71.1352114057111 46.8656929690115</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230312_ST-FRANCOIS_S1"/>
      <name>20230312_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.2863677536981 44.9818828815984</gml:pos>
        <gml:pos>-71.0569962655105 46.1798592375814</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230308_ST-FRANCOIS_S1"/>
      <name>20230308_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.4058361416469 44.8754147553144</gml:pos>
        <gml:pos>-70.2001720166539 45.8419441311162</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230301_ST-FRANCOIS_S1"/>
      <name>20230301_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.5847961711691 45.1823984783413</gml:pos>
        <gml:pos>-71.1352114057111 46.8656929690115</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230228_ST-FRANCOIS_S1"/>
      <name>20230228_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.2863677536981 44.9818828815984</gml:pos>
        <gml:pos>-71.0569962655105 46.1798592375814</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230224_ST-FRANCOIS_S1"/>
      <name>20230224_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.4058361416469 44.8754147553144</gml:pos>
        <gml:pos>-70.2001720166539 45.8419441311162</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230217_ST-FRANCOIS_S1"/>
      <name>20230217_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.5847961711691 45.1823984783413</gml:pos>
        <gml:pos>-71.1352114057111 46.8656929690115</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230216_ST-FRANCOIS_S1"/>
      <name>20230216_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.2863677536981 44.9818828815984</gml:pos>
        <gml:pos>-71.0569962655105 46.1798592375814</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230212_ST-FRANCOIS_S1"/>
      <name>20230212_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.4058361416469 44.8754147553144</gml:pos>
        <gml:pos>-70.2001720166539 45.8419441311162</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230205_ST-FRANCOIS_S1"/>
      <name>20230205_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.5847961711691 45.1823984783413</gml:pos>
        <gml:pos>-71.1352114057111 46.8656929690115</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230204_ST-FRANCOIS_S1"/>
      <name>20230204_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.2863677536981 44.9818828815984</gml:pos>
        <gml:pos>-71.0569962655105 46.1798592375814</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230131_ST-FRANCOIS_S1"/>
      <name>20230131_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.4058361416469 44.8754147553144</gml:pos>
        <gml:pos>-70.2001720166539 45.8419441311162</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230124_ST-FRANCOIS_S1"/>
      <name>20230124_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.5847961711691 45.1823984783413</gml:pos>
        <gml:pos>-71.1352114057111 46.8656929690115</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230123_ST-FRANCOIS_S1"/>
      <name>20230123_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.2863677536981 44.9818828815984</gml:pos>
        <gml:pos>-71.0569962655105 46.1798592375814</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230119_ST-FRANCOIS_S1"/>
      <name>20230119_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.4058361416469 44.8754147553144</gml:pos>
        <gml:pos>-70.2001720166539 45.8419441311162</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230112_ST-FRANCOIS_S1"/>
      <name>20230112_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.5847961711691 45.1823984783413</gml:pos>
        <gml:pos>-71.1352114057111 46.8656929690115</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230111_ST-FRANCOIS_S1"/>
      <name>20230111_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.2863677536981 44.9818828815984</gml:pos>
        <gml:pos>-71.0569962655105 46.1798592375814</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230107_ST-FRANCOIS_S1"/>
      <name>20230107_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.4058361416469 44.8754147553144</gml:pos>
        <gml:pos>-70.2001720166539 45.8419441311162</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230324_ST-MAURICE_S1"/>
      <name>20230324_ST-MAURICE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.2128895937734 45.8878564749395</gml:pos>
        <gml:pos>-70.4175948063999 47.065522995565</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230406_YAMASKA_S1"/>
      <name>20230406_YAMASKA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.576676592156 45.1800157760515</gml:pos>
        <gml:pos>-72.3466704637106 47.7404417025753</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230405_YAMASKA_S1"/>
      <name>20230405_YAMASKA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.576676592156 45.1800157760515</gml:pos>
        <gml:pos>-72.3466704637106 47.7404417025753</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230325_YAMASKA_S1"/>
      <name>20230325_YAMASKA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.576676592156 45.1800157760515</gml:pos>
        <gml:pos>-72.3466704637106 47.7404417025753</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230324_YAMASKA_S1"/>
      <name>20230324_YAMASKA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.5986137191563 45.0686714638062</gml:pos>
        <gml:pos>-72.1566768094658 46.2752778616</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230313_YAMASKA_S1"/>
      <name>20230313_YAMASKA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.4321934194363 45.1807723231157</gml:pos>
        <gml:pos>-72.356436837324 46.4827284624252</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230312_YAMASKA_S1"/>
      <name>20230312_YAMASKA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.5986137191563 45.0686714638062</gml:pos>
        <gml:pos>-72.1566768094658 46.2752778616</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230301_YAMASKA_S1"/>
      <name>20230301_YAMASKA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.4321934194363 45.1807723231157</gml:pos>
        <gml:pos>-72.356436837324 46.4827284624252</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230228_YAMASKA_S1"/>
      <name>20230228_YAMASKA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.5986137191563 45.0686714638062</gml:pos>
        <gml:pos>-72.1566768094658 46.2752778616</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230217_YAMASKA_S1"/>
      <name>20230217_YAMASKA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.4321934194363 45.1807723231157</gml:pos>
        <gml:pos>-72.356436837324 46.4827284624252</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230216_YAMASKA_S1"/>
      <name>20230216_YAMASKA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.5986137191563 45.0686714638062</gml:pos>
        <gml:pos>-72.1566768094658 46.2752778616</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230205_YAMASKA_S1"/>
      <name>20230205_YAMASKA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.4321934194363 45.1807723231157</gml:pos>
        <gml:pos>-72.356436837324 46.4827284624252</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230204_YAMASKA_S1"/>
      <name>20230204_YAMASKA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.5986137191563 45.0686714638062</gml:pos>
        <gml:pos>-72.1566768094658 46.2752778616</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230124_YAMASKA_S1"/>
      <name>20230124_YAMASKA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.4321934194363 45.1807723231157</gml:pos>
        <gml:pos>-72.356436837324 46.4827284624252</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230123_YAMASKA_S1"/>
      <name>20230123_YAMASKA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.5986137191563 45.0686714638062</gml:pos>
        <gml:pos>-72.1566768094658 46.2752778616</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230112_YAMASKA_S1"/>
      <name>20230112_YAMASKA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.4321934194363 45.1807723231157</gml:pos>
        <gml:pos>-72.356436837324 46.4827284624252</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230111_YAMASKA_S1"/>
      <name>20230111_YAMASKA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.5986137191563 45.0686714638062</gml:pos>
        <gml:pos>-72.1566768094658 46.2752778616</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230324_MATANE_RCM"/>
      <name>20230324_MATANE_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.6620357782369 48.6010138011604</gml:pos>
        <gml:pos>-67.1323471213404 49.0384462068962</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230316_MATANE_RCM"/>
      <name>20230316_MATANE_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.6614223536749 48.600347174826</gml:pos>
        <gml:pos>-67.1319681109496 49.037345682177</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230308_MATANE_RCM"/>
      <name>20230308_MATANE_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.6629721282596 48.5999462269355</gml:pos>
        <gml:pos>-67.1333040163718 49.0373736695094</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230304_MATANE_RCM"/>
      <name>20230304_MATANE_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.2507027062521 47.7946516625222</gml:pos>
        <gml:pos>-66.7207160504853 48.237849419314</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230329_MATAPEDIA_RCM"/>
      <name>20230329_MATAPEDIA_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.546272128339 47.8484750653606</gml:pos>
        <gml:pos>-67.0097950892786 48.2941738992743</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230328_MATAPEDIA_RCM"/>
      <name>20230328_MATAPEDIA_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.2506193546981 47.7945947396774</gml:pos>
        <gml:pos>-66.7206325808115 48.2377928563596</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230325_MATAPEDIA_RCM"/>
      <name>20230325_MATAPEDIA_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.5470281509681 47.8495502507025</gml:pos>
        <gml:pos>-67.0105459144229 48.2952460793089</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230324_MATAPEDIA_RCM"/>
      <name>20230324_MATAPEDIA_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.2504456680237 47.7952848096762</gml:pos>
        <gml:pos>-66.7204496783302 48.2384841690841</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230321_MATAPEDIA_RCM"/>
      <name>20230321_MATAPEDIA_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.5451462039457 47.8492031599575</gml:pos>
        <gml:pos>-67.0086507230466 48.2949078829938</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230320_MATAPEDIA_RCM"/>
      <name>20230320_MATAPEDIA_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.251383113421 47.7939270372765</gml:pos>
        <gml:pos>-66.7214106127639 48.2371211314334</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230308_MATAPEDIA_RCM"/>
      <name>20230308_MATAPEDIA_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.251398221531 47.7938699850105</gml:pos>
        <gml:pos>-66.7214264894923 48.2370639728731</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230129_MATANE_RCMD"/>
      <name>20230129_MATANE_RCMD</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.4278850050651 47.7551603263604</gml:pos>
        <gml:pos>-66.3912936118013 48.2242297906914</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230327_MONTREAL_RCM"/>
      <name>20230327_MONTREAL_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.8992116839243 45.3794049724436</gml:pos>
        <gml:pos>-73.3494272949127 45.815290000996</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230320_MONTREAL_RCM"/>
      <name>20230320_MONTREAL_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.163384253288 45.3900346166028</gml:pos>
        <gml:pos>-73.6047896113091 45.8234744231046</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230308_MONTREAL_RCM"/>
      <name>20230308_MONTREAL_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.1632561630583 45.3895524079547</gml:pos>
        <gml:pos>-73.6044157712039 45.8234319243973</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230306_MONTREAL_RCM"/>
      <name>20230306_MONTREAL_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.0106277050078 45.3393401787281</gml:pos>
        <gml:pos>-73.4520298283822 45.8117869195116</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230202_MONTREAL_RCM"/>
      <name>20230202_MONTREAL_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.0099045506402 45.3378658271789</gml:pos>
        <gml:pos>-73.4513290339974 45.8103079383028</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230210_MONTREAL_RCM"/>
      <name>20230210_MONTREAL_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.0114760547879 45.3393439176555</gml:pos>
        <gml:pos>-73.4528710587964 45.8117945235576</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230214_MONTREAL_RCM"/>
      <name>20230214_MONTREAL_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.0108500717381 45.3378955220053</gml:pos>
        <gml:pos>-73.4522663377514 45.8103419641767</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230212_MONTREAL_RCM"/>
      <name>20230212_MONTREAL_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.1628041268375 45.3896788720236</gml:pos>
        <gml:pos>-73.6052744487281 45.8209225612375</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230129_MONTREAL_RCMD"/>
      <name>20230129_MONTREAL_RCMD</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.2819693876745 45.047657107523</gml:pos>
        <gml:pos>-73.2117234506923 46.5109779715421</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230129_MONTREAL_RCM"/>
      <name>20230129_MONTREAL_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.012227263292 45.3388440065652</gml:pos>
        <gml:pos>-73.4536215360241 45.8112975783654</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230105_MONTREAL_RCM"/>
      <name>20230105_MONTREAL_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.2819693876745 45.047657107523</gml:pos>
        <gml:pos>-73.2117234506923 46.5109779715421</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230402_BECANCOUR_S2"/>
      <name>20230402_BECANCOUR_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.3498047343313 45.6444088174854</gml:pos>
        <gml:pos>-71.3419619818245 46.9520243907736</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230306_BECANCOUR_S2"/>
      <name>20230306_BECANCOUR_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.3499360663534 45.6444938895895</gml:pos>
        <gml:pos>-71.3418389219465 46.9520280620499</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230303_BECANCOUR_S2"/>
      <name>20230303_BECANCOUR_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.3499365339404 45.6444950031873</gml:pos>
        <gml:pos>-71.3418417747752 46.9520273473731</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230221_BECANCOUR_L8"/>
      <name>20230221_BECANCOUR_L8</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.3498052019201 45.6444099319816</gml:pos>
        <gml:pos>-71.3419648359828 46.9520236760565</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230221_BECANCOUR_S2"/>
      <name>20230221_BECANCOUR_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.3498052019201 45.6444099319816</gml:pos>
        <gml:pos>-71.3419648359828 46.9520236760565</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230211_BECANCOUR_S2"/>
      <name>20230211_BECANCOUR_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.3498052019201 45.6444099319816</gml:pos>
        <gml:pos>-71.3419648359828 46.9520236760565</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230204_BECANCOUR_S2"/>
      <name>20230204_BECANCOUR_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.3498052019201 45.6444099319816</gml:pos>
        <gml:pos>-71.3419648359828 46.9520236760565</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230127_BECANCOUR_S2"/>
      <name>20230127_BECANCOUR_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.3498047343313 45.6444088174854</gml:pos>
        <gml:pos>-71.3419619818245 46.9520243907736</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230110_BECANCOUR_S2"/>
      <name>20230110_BECANCOUR_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.3498307155483 45.6444855596281</gml:pos>
        <gml:pos>-71.3417419395598 46.9520940382725</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230325_BONAVENTURE_S2"/>
      <name>20230325_BONAVENTURE_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-66.6859310259462 48.3538724883191</gml:pos>
        <gml:pos>-64.7101322394038 49.0451755542285</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230402_CHAUDIERE_S2"/>
      <name>20230402_CHAUDIERE_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.4160884187617 45.6739203020918</gml:pos>
        <gml:pos>-70.4309002842063 46.9739336547537</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230303_CHAUDIERE_S2"/>
      <name>20230303_CHAUDIERE_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.4160884187617 45.6739203020918</gml:pos>
        <gml:pos>-70.4309002842063 46.9739336547537</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230221_CHAUDIERE_S2"/>
      <name>20230221_CHAUDIERE_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.4160884187617 45.6739203020918</gml:pos>
        <gml:pos>-70.4309002842063 46.9739336547537</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230211_CHAUDIERE_S2"/>
      <name>20230211_CHAUDIERE_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.4160884187617 45.6739203020918</gml:pos>
        <gml:pos>-70.4309002842063 46.9739336547537</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230127_CHAUDIERE_S2"/>
      <name>20230127_CHAUDIERE_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.4160870444094 45.6739194121319</gml:pos>
        <gml:pos>-70.4308964980909 46.9739336574394</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230325_MATANE_S2"/>
      <name>20230325_MATANE_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.6607540594603 47.7624440535401</gml:pos>
        <gml:pos>-66.6613113441267 49.0573823534878</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230325_MATAPEDIA_S2"/>
      <name>20230325_MATAPEDIA_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-66.7100304864465 47.7134531566984</gml:pos>
        <gml:pos>-64.7610857011313 48.4035626119923</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230401_MONTREAL_L9"/>
      <name>20230401_MONTREAL_L9</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.1447128514721 44.9702079062974</gml:pos>
        <gml:pos>-73.106293360806 46.2900858347461</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230324_MONTREAL_L9"/>
      <name>20230324_MONTREAL_L9</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.1447128514721 44.9701183890901</gml:pos>
        <gml:pos>-73.1064115467082 46.2900798954508</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230306_MONTREAL_S2"/>
      <name>20230306_MONTREAL_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.144715693776 44.9702055036714</gml:pos>
        <gml:pos>-73.1062927771848 46.2900856118492</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230303_MONTREAL_S2"/>
      <name>20230303_MONTREAL_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.1447128514721 44.9702079062974</gml:pos>
        <gml:pos>-73.106293360806 46.2900858347461</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230221_MONTREAL_L8"/>
      <name>20230221_MONTREAL_L8</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.1447128514721 44.9701183890901</gml:pos>
        <gml:pos>-73.1064115467082 46.2900798954508</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230221_MONTREAL_S2"/>
      <name>20230221_MONTREAL_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.1447128514721 44.9701183890901</gml:pos>
        <gml:pos>-73.1064115467082 46.2900798954508</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230211_MONTREAL_S2"/>
      <name>20230211_MONTREAL_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.1447128514721 44.9702079062974</gml:pos>
        <gml:pos>-73.106293360806 46.2900858347461</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230204_MONTREAL_S2"/>
      <name>20230204_MONTREAL_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.1447128514721 44.9701183890901</gml:pos>
        <gml:pos>-73.1064115467082 46.2900798954508</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230127_MONTREAL_S2"/>
      <name>20230127_MONTREAL_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.144715693776 44.9702055036714</gml:pos>
        <gml:pos>-73.1062927771848 46.2900856118492</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230110_MONTREAL_S2"/>
      <name>20230110_MONTREAL_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.1447447745738 44.9701199470527</gml:pos>
        <gml:pos>-73.106199964707 46.2901580508447</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230324_ROUGE_L9"/>
      <name>20230324_ROUGE_L9</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-75.0852033169403 45.0870508203267</gml:pos>
        <gml:pos>-74.021730635727 46.4142880835167</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230306_ROUGE_S2"/>
      <name>20230306_ROUGE_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-75.0852076648752 45.0871373073626</gml:pos>
        <gml:pos>-74.0216139520299 46.4142940447651</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230221_ROUGE_L8"/>
      <name>20230221_ROUGE_L8</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-75.0852033169403 45.0870508203267</gml:pos>
        <gml:pos>-74.021730635727 46.4142880835167</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230204_ROUGE_S2"/>
      <name>20230204_ROUGE_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-75.0852033169403 45.0870508203267</gml:pos>
        <gml:pos>-74.021730635727 46.4142880835167</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230110_ROUGE_S2"/>
      <name>20230110_ROUGE_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-75.0853356619964 45.0870559254737</gml:pos>
        <gml:pos>-74.0215160871506 46.414345851008</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230316_SAGUENAY_S2_1"/>
      <name>20230316_SAGUENAY_S2_1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.9085850286907 48.2694643743433</gml:pos>
        <gml:pos>-70.8568539366696 49.5781839706446</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230303_SAGUENAY_S2_1"/>
      <name>20230303_SAGUENAY_S2_1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.9085850286907 48.2694643743433</gml:pos>
        <gml:pos>-70.8568539366696 49.5781839706446</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230316_SAGUENAY_S2_2"/>
      <name>20230316_SAGUENAY_S2_2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.894093522702 48.2354462353629</gml:pos>
        <gml:pos>-71.8172127473358 49.5520208539481</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230303_SAGUENAY_S2_2"/>
      <name>20230303_SAGUENAY_S2_2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.894093522702 48.2354462353629</gml:pos>
        <gml:pos>-71.8172127473358 49.5520208539481</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230402_ST-FRANCOIS_S2"/>
      <name>20230402_ST-FRANCOIS_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.2518635932076 45.007077175456</gml:pos>
        <gml:pos>-70.4064866957117 45.6952226484795</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230306_ST-FRANCOIS_S2"/>
      <name>20230306_ST-FRANCOIS_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.2518635932076 45.0069875052573</gml:pos>
        <gml:pos>-70.4066099700273 45.6952202227041</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230303_ST-FRANCOIS_S2"/>
      <name>20230303_ST-FRANCOIS_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.2518627404855 45.0069902282467</gml:pos>
        <gml:pos>-70.4066139430267 45.6952205395341</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230221_ST-FRANCOIS_L8"/>
      <name>20230221_ST-FRANCOIS_L8</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.2518560231857 45.0069902282467</gml:pos>
        <gml:pos>-70.4066139430267 45.6951306569536</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230221_ST-FRANCOIS_S2"/>
      <name>20230221_ST-FRANCOIS_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.2518560231857 45.0069902282467</gml:pos>
        <gml:pos>-70.4066139430267 45.6951306569536</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230211_ST-FRANCOIS_S2"/>
      <name>20230211_ST-FRANCOIS_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.2518627404855 45.0070798975492</gml:pos>
        <gml:pos>-70.4064906674117 45.6952229653387</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230204_ST-FRANCOIS_S2"/>
      <name>20230204_ST-FRANCOIS_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.2518560231857 45.0069902282467</gml:pos>
        <gml:pos>-70.4066139430267 45.6951306569536</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230127_ST-FRANCOIS_S2"/>
      <name>20230127_ST-FRANCOIS_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.2518635932076 45.007077175456</gml:pos>
        <gml:pos>-70.4064866957117 45.6952226484795</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230401_ST-MAURICE_L9"/>
      <name>20230401_ST-MAURICE_L9</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.3034123328603 46.4607655762299</gml:pos>
        <gml:pos>-71.3911027197961 47.1686133694804</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230401_YAMASKA_L9"/>
      <name>20230401_YAMASKA_L9</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.2413171456918 45.1854219532053</gml:pos>
        <gml:pos>-72.2206749215959 46.4989957492354</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230402_YAMASKA_S2"/>
      <name>20230402_YAMASKA_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.2413171456918 45.1854219532053</gml:pos>
        <gml:pos>-72.2206749215959 46.4989957492354</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230306_YAMASKA_S2"/>
      <name>20230306_YAMASKA_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.2413180799857 45.1855095479926</gml:pos>
        <gml:pos>-72.2205531335823 46.4990012855337</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230303_YAMASKA_S2"/>
      <name>20230303_YAMASKA_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.2413171456918 45.1855115891869</gml:pos>
        <gml:pos>-72.2205545886265 46.4990005499973</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230221_YAMASKA_L8"/>
      <name>20230221_YAMASKA_L8</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.2414471564928 45.1854161557937</gml:pos>
        <gml:pos>-72.2204210441123 46.4990053505957</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230221_YAMASKA_S2"/>
      <name>20230221_YAMASKA_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.2414471564928 45.1854161557937</gml:pos>
        <gml:pos>-72.2204210441123 46.4990053505957</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230211_YAMASKA_S2"/>
      <name>20230211_YAMASKA_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.2413171456918 45.1854219532053</gml:pos>
        <gml:pos>-72.2206749215959 46.4989957492354</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230204_YAMASKA_S2"/>
      <name>20230204_YAMASKA_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.2414471564928 45.1854161557937</gml:pos>
        <gml:pos>-72.2204210441123 46.4990053505957</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230127_YAMASKA_S2"/>
      <name>20230127_YAMASKA_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.2413180799857 45.1854199120115</gml:pos>
        <gml:pos>-72.2206734665497 46.4989964847734</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20230110_YAMASKA_S2"/>
      <name>20230110_YAMASKA_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.2413335876248 45.1854587678924</gml:pos>
        <gml:pos>-72.2205012782706 46.4990380962751</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240106_ST-FRANCOIS_S1"/>
      <name>20240106_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.5847961711691 45.1823984783413</gml:pos>
        <gml:pos>-71.1352114057111 46.8656929690115</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240107_MONTREAL_S1"/>
      <name>20240107_MONTREAL_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.6867834263541 45.0358422058121</gml:pos>
        <gml:pos>-73.3017051911075 46.5352647560344</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240106_YAMASKA_S1"/>
      <name>20240106_YAMASKA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.576676592156 45.1800157760515</gml:pos>
        <gml:pos>-72.3466704637106 47.7404417025753</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240106_CHAUDIERE_S1"/>
      <name>20240106_CHAUDIERE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.5794138131475 45.6911406727393</gml:pos>
        <gml:pos>-70.415768033367 46.9568147029257</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240107_ST-FRANCOIS_S1"/>
      <name>20240107_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.5847961711691 45.1823984783413</gml:pos>
        <gml:pos>-71.1352114057111 46.8656929690115</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240107_YAMASKA_S1"/>
      <name>20240107_YAMASKA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.4321934194363 45.1807723231157</gml:pos>
        <gml:pos>-72.356436837324 46.4827284624252</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240107_ST-MAURICE_S1"/>
      <name>20240107_ST-MAURICE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.1390723995862 46.0482014101905</gml:pos>
        <gml:pos>-72.249644156289 47.1165075501798</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20231216_ASSOMPTION_S2"/>
      <name>20231216_ASSOMPTION_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.8171895077788 45.953608219676</gml:pos>
        <gml:pos>-72.2978362230946 47.0030705382028</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240114_ST-FRANCOIS_S1"/>
      <name>20240114_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.4058361416469 44.8754147553144</gml:pos>
        <gml:pos>-70.2001720166539 45.8419441311162</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240114_CHAUDIERE_S1"/>
      <name>20240114_CHAUDIERE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.5794138131475 45.6911406727393</gml:pos>
        <gml:pos>-70.415768033367 46.9568147029257</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240114_BECANCOUR_S1"/>
      <name>20240114_BECANCOUR_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.6090928164009 45.4688779398953</gml:pos>
        <gml:pos>-71.4420528587653 46.8048226147754</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240118_CHAUDIERE_S1"/>
      <name>20240118_CHAUDIERE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.5794138131475 45.6911406727393</gml:pos>
        <gml:pos>-70.415768033367 46.9568147029257</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240118_ST-FRANCOIS_S1"/>
      <name>20240118_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.5847961711691 45.1823984783413</gml:pos>
        <gml:pos>-71.1352114057111 46.8656929690115</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240118_YAMASKA_S1"/>
      <name>20240118_YAMASKA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.576676592156 45.1800157760515</gml:pos>
        <gml:pos>-72.3466704637106 47.7404417025753</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240112_CHAUDIERE_S2"/>
      <name>20240112_CHAUDIERE_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.4160884187617 45.6739203020918</gml:pos>
        <gml:pos>-70.4309002842063 46.9739336547537</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240119_ST-FRANCOIS_S1"/>
      <name>20240119_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.5847961711691 45.1823984783413</gml:pos>
        <gml:pos>-71.1352114057111 46.8656929690115</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240112_YAMASKA_S2"/>
      <name>20240112_YAMASKA_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.2413171456918 45.1855115891869</gml:pos>
        <gml:pos>-72.2205545886265 46.4990005499973</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240119_YAMASKA_S1"/>
      <name>20240119_YAMASKA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.4321934194363 45.1807723231157</gml:pos>
        <gml:pos>-72.356436837324 46.4827284624252</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240119_ST-MAURICE_S1"/>
      <name>20240119_ST-MAURICE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.1390723995862 46.0482014101905</gml:pos>
        <gml:pos>-72.249644156289 47.1165075501798</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240112_ST-MAURICE_S2"/>
      <name>20240112_ST-MAURICE_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.3034112792125 46.4607661461654</gml:pos>
        <gml:pos>-71.3911056473458 47.1686129389395</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240112_ST-FRANCOIS_S2"/>
      <name>20240112_ST-FRANCOIS_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.2518627404855 45.0069902282467</gml:pos>
        <gml:pos>-70.4066139430267 45.6952205395341</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240112_BECANCOUR_S2"/>
      <name>20240112_BECANCOUR_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.3499365339404 45.6444950031873</gml:pos>
        <gml:pos>-71.3418417747752 46.9520273473731</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240119_MONTREAL_S1"/>
      <name>20240119_MONTREAL_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.6867834263541 45.0358422058121</gml:pos>
        <gml:pos>-73.3017051911075 46.5352647560344</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240122_MONTREAL_L9"/>
      <name>20240122_MONTREAL_L9</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.1447128514721 44.9702079062974</gml:pos>
        <gml:pos>-73.106293360806 46.2900858347461</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240124_ROUGE_S1"/>
      <name>20240124_ROUGE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-75.1110187828609 45.4194968588226</gml:pos>
        <gml:pos>-74.1776346056257 46.5184857597305</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240124_MONTREAL_S1"/>
      <name>20240124_MONTREAL_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.2819693876745 45.047657107523</gml:pos>
        <gml:pos>-73.2117234506923 46.5109779715421</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240128_YAMASKA_RCM"/>
      <name>20240128_YAMASKA_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.962341385 45.924231335</gml:pos>
        <gml:pos>-72.873346093 46.117132124</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240130_YAMASKA_S1"/>
      <name>20240130_YAMASKA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.576676592156 45.1800157760515</gml:pos>
        <gml:pos>-72.3466704637106 47.7404417025753</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240128_CHAUDIERE_RCM"/>
      <name>20240128_CHAUDIERE_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.3387059763462 46.2985276137668</gml:pos>
        <gml:pos>-71.0947941446506 46.6965688142479</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240129_ST-FRANCOIS_RCM"/>
      <name>20240129_ST-FRANCOIS_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.559793957 45.7283328012545</gml:pos>
        <gml:pos>-72.2168415815111 45.98127983</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240127_CHAUDIERE_RCM"/>
      <name>20240127_CHAUDIERE_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-70.689788996 45.74994871</gml:pos>
        <gml:pos>-70.620281635 45.981393433</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240128_ST-FRANCOIS_RCM"/>
      <name>20240128_ST-FRANCOIS_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.1781321194471 45.2282647538994</gml:pos>
        <gml:pos>-71.6989837787453 45.6575556155125</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240127_MATAPEDIA_RCM"/>
      <name>20240127_MATAPEDIA_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-66.861975914 47.972096333</gml:pos>
        <gml:pos>-66.668538104 48.034796865</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240130_CHAUDIERE_S1"/>
      <name>20240130_CHAUDIERE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.5794138131475 45.6911406727393</gml:pos>
        <gml:pos>-70.415768033367 46.9568147029257</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240128_MATAPEDIA_RCM"/>
      <name>20240128_MATAPEDIA_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.196152358 47.986449399</gml:pos>
        <gml:pos>-66.968973279 48.179355773</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240130_ST-FRANCOIS_S1"/>
      <name>20240130_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.5847961711691 45.1823984783413</gml:pos>
        <gml:pos>-71.1352114057111 46.8656929690115</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240128_ST-FRANCOIS_RCM_1"/>
      <name>20240128_ST-FRANCOIS_RCM_1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.926908154 46.0338276488101</gml:pos>
        <gml:pos>-72.7715229608213 46.13048458</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240127_ST-FRANCOIS_RCM"/>
      <name>20240127_ST-FRANCOIS_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.776523921 45.8595358919489</gml:pos>
        <gml:pos>-72.4525787729058 46.047053534</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240130_ST-FRANCOIS_RCM"/>
      <name>20240130_ST-FRANCOIS_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.920317616 45.938181396</gml:pos>
        <gml:pos>-72.516415694 46.12534234</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240130_YAMASKA_RCM"/>
      <name>20240130_YAMASKA_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.96334312 45.929845205</gml:pos>
        <gml:pos>-72.874871927 46.114854873</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240131_ST-MAURICE_S1"/>
      <name>20240131_ST-MAURICE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.1390723995862 46.0482014101905</gml:pos>
        <gml:pos>-72.249644156289 47.1165075501798</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240201_CHAUDIERE_RCM"/>
      <name>20240201_CHAUDIERE_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.266040048 46.3469871518897</gml:pos>
        <gml:pos>-70.9192719564044 46.703412645</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240131_YAMASKA_S1"/>
      <name>20240131_YAMASKA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.4321934194363 45.1807723231157</gml:pos>
        <gml:pos>-72.356436837324 46.4827284624252</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240130_MATAPEDIA_RCM"/>
      <name>20240130_MATAPEDIA_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.169384104 47.887872515</gml:pos>
        <gml:pos>-66.787302628 48.182203221</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240131_ST-FRANCOIS_S1"/>
      <name>20240131_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.5847961711691 45.1823984783413</gml:pos>
        <gml:pos>-71.1352114057111 46.8656929690115</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240131_MONTREAL_S1"/>
      <name>20240131_MONTREAL_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.6867834263541 45.0358422058121</gml:pos>
        <gml:pos>-73.3017051911075 46.5352647560344</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240204_ST-FRANCOIS_S2"/>
      <name>20240204_ST-FRANCOIS_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.2518627404855 45.0069902282467</gml:pos>
        <gml:pos>-70.4066139430267 45.6952205395341</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240204_MONTREAL_S2"/>
      <name>20240204_MONTREAL_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.1447128514721 44.9702079062974</gml:pos>
        <gml:pos>-73.106293360806 46.2900858347461</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240204_MONTREAL_S2_1"/>
      <name>20240204_MONTREAL_S2_1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.1447128514721 44.9702079062974</gml:pos>
        <gml:pos>-73.106293360806 46.2900858347461</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240202_ST-FRANCOIS_RCM"/>
      <name>20240202_ST-FRANCOIS_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.303107046 45.551307278</gml:pos>
        <gml:pos>-71.98840143 45.849121915</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240202_BECANCOUR_RCM"/>
      <name>20240202_BECANCOUR_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.108416284 45.981582753</gml:pos>
        <gml:pos>-71.995068922 46.088262623</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240202_MONTREAL_RCM"/>
      <name>20240202_MONTREAL_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.013073317 45.115929528</gml:pos>
        <gml:pos>-73.780321691 45.324401307</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240204_ST-MAURICE_S2"/>
      <name>20240204_ST-MAURICE_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.3034112792125 46.4607661461654</gml:pos>
        <gml:pos>-71.3911056473458 47.1686129389395</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240204_BECANCOUR_S2"/>
      <name>20240204_BECANCOUR_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.3499365339404 45.6444950031873</gml:pos>
        <gml:pos>-71.3418417747752 46.9520273473731</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240204_ST-MAURICE_S2_1"/>
      <name>20240204_ST-MAURICE_S2_1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.3034112792125 46.4607661461654</gml:pos>
        <gml:pos>-71.3911056473458 47.1686129389395</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240204_YAMASKA_S2"/>
      <name>20240204_YAMASKA_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.2413171456918 45.1855115891869</gml:pos>
        <gml:pos>-72.2205545886265 46.4990005499973</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240201_ST-FRANCOIS_RCM"/>
      <name>20240201_ST-FRANCOIS_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.096855976 45.395125255</gml:pos>
        <gml:pos>-71.730395938 45.619688557</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240204_ST-FRANCOIS_S2_1"/>
      <name>20240204_ST-FRANCOIS_S2_1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.2518627404855 45.0069902282467</gml:pos>
        <gml:pos>-70.4066139430267 45.6952205395341</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240204_BECANCOUR_S2_1"/>
      <name>20240204_BECANCOUR_S2_1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.3499365339404 45.6444950031873</gml:pos>
        <gml:pos>-71.3418417747752 46.9520273473731</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240204_YAMASKA_S2_1"/>
      <name>20240204_YAMASKA_S2_1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.2413171456918 45.1855115891869</gml:pos>
        <gml:pos>-72.2205545886265 46.4990005499973</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240204_ST-FRANCOIS_RCM"/>
      <name>20240204_ST-FRANCOIS_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.963087312 45.798830554</gml:pos>
        <gml:pos>-72.79261479 46.125667526</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240203_MONTREAL_RCM"/>
      <name>20240203_MONTREAL_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.948787401 45.1346204447148</gml:pos>
        <gml:pos>-73.7364621045164 45.407297326</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240205_MONTREAL_RCM"/>
      <name>20240205_MONTREAL_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.917401243 45.1786809656805</gml:pos>
        <gml:pos>-73.4549987810029 45.5670294151261</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240205_CHAUDIERE_RCM"/>
      <name>20240205_CHAUDIERE_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.017725393 46.165655019</gml:pos>
        <gml:pos>-70.707357868 46.430489584</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240206_ST-FRANCOIS_RCM"/>
      <name>20240206_ST-FRANCOIS_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.92604198 46.010048284</gml:pos>
        <gml:pos>-72.727320948 46.128871169</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240206_YAMASKA_RCM"/>
      <name>20240206_YAMASKA_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.970828086 45.6179575361648</gml:pos>
        <gml:pos>-72.8701065120773 46.120610965</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240205_MONTREAL_S1"/>
      <name>20240205_MONTREAL_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.2819693876745 45.047657107523</gml:pos>
        <gml:pos>-73.2117234506923 46.5109779715421</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240205_ROUGE_S1"/>
      <name>20240205_ROUGE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-75.1110187828609 45.4194968588226</gml:pos>
        <gml:pos>-74.1776346056257 46.5184857597305</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240206_CHAUDIERE_RCM"/>
      <name>20240206_CHAUDIERE_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-70.668711418 45.985719459</gml:pos>
        <gml:pos>-70.451748082 46.118896142</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240206_ST-FRANCOIS_S2"/>
      <name>20240206_ST-FRANCOIS_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.2518627404855 45.0069902282467</gml:pos>
        <gml:pos>-70.4066139430267 45.6952205395341</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240206_MONTREAL_S2"/>
      <name>20240206_MONTREAL_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.1447128514721 44.9702079062974</gml:pos>
        <gml:pos>-73.106293360806 46.2900858347461</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240206_CHAUDIERE_S2"/>
      <name>20240206_CHAUDIERE_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.4160884187617 45.6739203020918</gml:pos>
        <gml:pos>-70.4309002842063 46.9739336547537</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240207_MATAPEDIA_RCM"/>
      <name>20240207_MATAPEDIA_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.170190447 47.878194015</gml:pos>
        <gml:pos>-66.786148935 48.181240991</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240206_YAMASKA_S2"/>
      <name>20240206_YAMASKA_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.2413171456918 45.1855115891869</gml:pos>
        <gml:pos>-72.2205545886265 46.4990005499973</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240206_ST-MAURICE_S2"/>
      <name>20240206_ST-MAURICE_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.3034112792125 46.4607661461654</gml:pos>
        <gml:pos>-71.3911056473458 47.1686129389395</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240206_YAMASKA_S2_1"/>
      <name>20240206_YAMASKA_S2_1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.2413171456918 45.1855115891869</gml:pos>
        <gml:pos>-72.2205545886265 46.4990005499973</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240206_CHAUDIERE_S2_1"/>
      <name>20240206_CHAUDIERE_S2_1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.4160884187617 45.6739203020918</gml:pos>
        <gml:pos>-70.4309002842063 46.9739336547537</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240206_ST-MAURICE_S2_1"/>
      <name>20240206_ST-MAURICE_S2_1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.3034112792125 46.4607661461654</gml:pos>
        <gml:pos>-71.3911056473458 47.1686129389395</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240207_MONTREAL_RCM"/>
      <name>20240207_MONTREAL_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.980423371 45.4610584865946</gml:pos>
        <gml:pos>-73.6575952132505 45.699277595</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240206_ST-FRANCOIS_S2_1"/>
      <name>20240206_ST-FRANCOIS_S2_1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.2518627404855 45.0069902282467</gml:pos>
        <gml:pos>-70.4066139430267 45.6952205395341</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240206_BECANCOUR_S2"/>
      <name>20240206_BECANCOUR_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.3499365339404 45.6444950031873</gml:pos>
        <gml:pos>-71.3418417747752 46.9520273473731</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240206_MONTREAL_S2_1"/>
      <name>20240206_MONTREAL_S2_1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.1447128514721 44.9702079062974</gml:pos>
        <gml:pos>-73.106293360806 46.2900858347461</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240206_BECANCOUR_S2_1"/>
      <name>20240206_BECANCOUR_S2_1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.3499365339404 45.6444950031873</gml:pos>
        <gml:pos>-71.3418417747752 46.9520273473731</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240207_BECANCOUR_S1"/>
      <name>20240207_BECANCOUR_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.6090928164009 45.4688779398953</gml:pos>
        <gml:pos>-71.4420528587653 46.8048226147754</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240207_MONTREAL_RCM_1"/>
      <name>20240207_MONTREAL_RCM_1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.008612448 45.117309547</gml:pos>
        <gml:pos>-73.740361551 45.411930871</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240207_CHAUDIERE_RCM"/>
      <name>20240207_CHAUDIERE_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.353288272 46.2342424074107</gml:pos>
        <gml:pos>-70.8245747051274 46.765707059</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240207_ST-FRANCOIS_S1"/>
      <name>20240207_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.4058361416469 44.8754147553144</gml:pos>
        <gml:pos>-70.2001720166539 45.8419441311162</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240207_ST-FRANCOIS_RCM"/>
      <name>20240207_ST-FRANCOIS_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.905064428 45.0094052840502</gml:pos>
        <gml:pos>-71.5459946271293 45.591462147</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240207_CHAUDIERE_S1"/>
      <name>20240207_CHAUDIERE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.5794138131475 45.6911406727393</gml:pos>
        <gml:pos>-70.415768033367 46.9568147029257</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240208_CHAUDIERE_RCM"/>
      <name>20240208_CHAUDIERE_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-70.819169621 45.7486870437708</gml:pos>
        <gml:pos>-70.4649295574096 46.261801811</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240209_ST-FRANCOIS_RCM"/>
      <name>20240209_ST-FRANCOIS_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.926226304 46.020124913</gml:pos>
        <gml:pos>-72.769417913 46.13387744</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240208_ST-FRANCOIS_RCM"/>
      <name>20240208_ST-FRANCOIS_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.9266153911955 45.0133879650773</gml:pos>
        <gml:pos>-71.7475797580428 46.2055595472924</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240208_MATAPEDIA_RCM"/>
      <name>20240208_MATAPEDIA_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-66.859791038 47.98066928</gml:pos>
        <gml:pos>-66.668025561 48.030573161</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240211_ST-FRANCOIS_RCM"/>
      <name>20240211_ST-FRANCOIS_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.313111692 45.612363335</gml:pos>
        <gml:pos>-72.085688371 45.850720469</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240209_MATAPEDIA_RCM"/>
      <name>20240209_MATAPEDIA_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.206121444 47.990278754</gml:pos>
        <gml:pos>-66.975268442 48.177703964</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240211_ST-FRANCOIS_S1"/>
      <name>20240211_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.5847961711691 45.1823984783413</gml:pos>
        <gml:pos>-71.1352114057111 46.8656929690115</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240211_YAMASKA_S1"/>
      <name>20240211_YAMASKA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.576676592156 45.1800157760515</gml:pos>
        <gml:pos>-72.3466704637106 47.7404417025753</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240211_BECANCOUR_RCM"/>
      <name>20240211_BECANCOUR_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.06752142 46.004995214</gml:pos>
        <gml:pos>-72.000861528 46.042638447</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240209_MONTREAL_RCM"/>
      <name>20240209_MONTREAL_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.920521613 45.299537603493</gml:pos>
        <gml:pos>-73.5484307187743 45.710476853</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240211_CHAUDIERE_S1"/>
      <name>20240211_CHAUDIERE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.5794138131475 45.6911406727393</gml:pos>
        <gml:pos>-70.415768033367 46.9568147029257</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240210_CHAUDIERE_RCM"/>
      <name>20240210_CHAUDIERE_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-70.671877455 45.989364079</gml:pos>
        <gml:pos>-70.449242973 46.126202833</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240211_MATAPEDIA_RCM"/>
      <name>20240211_MATAPEDIA_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.166718314 47.877795977</gml:pos>
        <gml:pos>-66.789742373 48.18001976</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240211_MATANE_RCM"/>
      <name>20240211_MATANE_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.562688084 48.670257978</gml:pos>
        <gml:pos>-67.365570764 48.865014611</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240212_CHAUDIERE_RCM"/>
      <name>20240212_CHAUDIERE_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-70.820665189 45.7466930765287</gml:pos>
        <gml:pos>-70.4624495337708 46.262793124</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240213_YAMASKA_RCM"/>
      <name>20240213_YAMASKA_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.995015863 45.4341920897681</gml:pos>
        <gml:pos>-72.8618906871806 46.116100677</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240212_YAMASKA_RCM"/>
      <name>20240212_YAMASKA_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.9621345 45.790393674</gml:pos>
        <gml:pos>-72.872764322 46.115493885</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240213_ST-FRANCOIS_RCM"/>
      <name>20240213_ST-FRANCOIS_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.926579198 46.02471314</gml:pos>
        <gml:pos>-72.76801757 46.132604937</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240211_CHAUDIERE_RCM"/>
      <name>20240211_CHAUDIERE_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.341821503 46.3418480047709</gml:pos>
        <gml:pos>-70.9181014282551 46.768319144</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240212_ST-FRANCOIS_RCM"/>
      <name>20240212_ST-FRANCOIS_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.931093313 46.052664693</gml:pos>
        <gml:pos>-72.791231603 46.128058896</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240212_YAMASKA_S1"/>
      <name>20240212_YAMASKA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.4321934194363 45.1807723231157</gml:pos>
        <gml:pos>-72.356436837324 46.4827284624252</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240212_ST-MAURICE_S1"/>
      <name>20240212_ST-MAURICE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.1390723995862 46.0482014101905</gml:pos>
        <gml:pos>-72.249644156289 47.1165075501798</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240212_MONTREAL_S1"/>
      <name>20240212_MONTREAL_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.6867834263541 45.0358422058121</gml:pos>
        <gml:pos>-73.3017051911075 46.5352647560344</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240212_ST-FRANCOIS_S1"/>
      <name>20240212_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.5847961711691 45.1823984783413</gml:pos>
        <gml:pos>-71.1352114057111 46.8656929690115</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240214_MONTREAL_RCM"/>
      <name>20240214_MONTREAL_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.00822874 45.110970069</gml:pos>
        <gml:pos>-73.77595689 45.328117241</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240211_ST-FRANCOIS_RCM_1"/>
      <name>20240211_ST-FRANCOIS_RCM_1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.193365292 45.3370095021531</gml:pos>
        <gml:pos>-71.9895520886394 45.688938196</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240210_ST-FRANCOIS_RCM"/>
      <name>20240210_ST-FRANCOIS_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.560021159 45.727818751</gml:pos>
        <gml:pos>-72.219009536 45.981363107</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240214_ST-FRANCOIS_RCM"/>
      <name>20240214_ST-FRANCOIS_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.832387585 45.878395312</gml:pos>
        <gml:pos>-72.464803628 46.076580638</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240214_CHAUDIERE_RCM"/>
      <name>20240214_CHAUDIERE_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.400163046 45.9731303520023</gml:pos>
        <gml:pos>-70.4500285614321 46.660074665</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240215_MONTREAL_RCM"/>
      <name>20240215_MONTREAL_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.007921604 45.115026399</gml:pos>
        <gml:pos>-73.746700354 45.393594373</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240217_ROUGE_S1"/>
      <name>20240217_ROUGE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-75.1110187828609 45.4194968588226</gml:pos>
        <gml:pos>-74.1776346056257 46.5184857597305</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240216_MATAPEDIA_RCM"/>
      <name>20240216_MATAPEDIA_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.197032421 47.977349799457</gml:pos>
        <gml:pos>-66.6690793889421 48.180041541</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240215_ST-FRANCOIS_RCM"/>
      <name>20240215_ST-FRANCOIS_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.91806877 45.0088879607259</gml:pos>
        <gml:pos>-71.5454032432959 45.592644536</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240217_MONTREAL_S1"/>
      <name>20240217_MONTREAL_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.2819693876745 45.047657107523</gml:pos>
        <gml:pos>-73.2117234506923 46.5109779715421</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240216_CHAUDIERE_RCM"/>
      <name>20240216_CHAUDIERE_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-70.817874177 45.7490882093317</gml:pos>
        <gml:pos>-70.4653065247599 46.252507658</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240215_CHAUDIERE_RCM"/>
      <name>20240215_CHAUDIERE_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.363701379 46.520445255</gml:pos>
        <gml:pos>-71.117258155 46.768199347</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240219_CHAUDIERE_S1"/>
      <name>20240219_CHAUDIERE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.5794138131475 45.6911406727393</gml:pos>
        <gml:pos>-70.415768033367 46.9568147029257</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240219_BECANCOUR_S2"/>
      <name>20240219_BECANCOUR_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.3499365339404 45.6444950031873</gml:pos>
        <gml:pos>-71.3418417747752 46.9520273473731</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240216_ST-FRANCOIS_RCM"/>
      <name>20240216_ST-FRANCOIS_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.9281928718055 45.0065440981759</gml:pos>
        <gml:pos>-71.7490791932136 46.2049709424394</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240217_CHAUDIERE_RCM"/>
      <name>20240217_CHAUDIERE_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.018189495 46.16463949</gml:pos>
        <gml:pos>-70.711147337 46.433086963</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240219_YAMASKA_S2"/>
      <name>20240219_YAMASKA_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.2413171456918 45.1855115891869</gml:pos>
        <gml:pos>-72.2205545886265 46.4990005499973</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240217_ST-FRANCOIS_RCM"/>
      <name>20240217_ST-FRANCOIS_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.978022745 45.76277231</gml:pos>
        <gml:pos>-72.861755418 46.124896589</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240216_YAMASKA_RCM"/>
      <name>20240216_YAMASKA_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.919889082 45.858450631</gml:pos>
        <gml:pos>-72.452397537 46.127318825</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240217_YAMASKA_RCM"/>
      <name>20240217_YAMASKA_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.994978397 45.4333732785844</gml:pos>
        <gml:pos>-72.8605186388303 46.126107707</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240219_ST-MAURICE_S2"/>
      <name>20240219_ST-MAURICE_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.3034112792125 46.4607661461654</gml:pos>
        <gml:pos>-71.3911056473458 47.1686129389395</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240219_MONTREAL_S2"/>
      <name>20240219_MONTREAL_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.1447128514721 44.9702079062974</gml:pos>
        <gml:pos>-73.106293360806 46.2900858347461</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240219_BECANCOUR_S1"/>
      <name>20240219_BECANCOUR_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.6090928164009 45.4688779398953</gml:pos>
        <gml:pos>-71.4420528587653 46.8048226147754</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240219_ROUGE_S2"/>
      <name>20240219_ROUGE_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-75.0852033169403 45.0871402639967</gml:pos>
        <gml:pos>-74.0216138918046 46.4142952026938</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240219_ST-FRANCOIS_S1"/>
      <name>20240219_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.4058361416469 44.8754147553144</gml:pos>
        <gml:pos>-70.2001720166539 45.8419441311162</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240219_MATANE_RCM"/>
      <name>20240219_MATANE_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.549503352 48.671435554</gml:pos>
        <gml:pos>-67.370228437 48.861857096</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240219_ST-FRANCOIS_S2"/>
      <name>20240219_ST-FRANCOIS_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.2518627404855 45.0069902282467</gml:pos>
        <gml:pos>-70.4066139430267 45.6952205395341</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240220_YAMASKA_RCM"/>
      <name>20240220_YAMASKA_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.985021455 45.797079071</gml:pos>
        <gml:pos>-72.879030271 46.124269248</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240219_MATAPEDIA_RCM"/>
      <name>20240219_MATAPEDIA_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.168661619 47.877951582</gml:pos>
        <gml:pos>-66.784560838 48.179172148</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240219_BECANCOUR_RCM"/>
      <name>20240219_BECANCOUR_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.068036886 46.008335714</gml:pos>
        <gml:pos>-71.984616207 46.046419067</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240215_MATAPEDIA_RCM"/>
      <name>20240215_MATAPEDIA_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.171534417 47.880144124</gml:pos>
        <gml:pos>-66.784343138 48.18166377</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240219_ST-FRANCOIS_RCM"/>
      <name>20240219_ST-FRANCOIS_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.312369438 45.3006630352113</gml:pos>
        <gml:pos>-71.7774709697936 45.855100148</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240221_CHAUDIERE_RCM"/>
      <name>20240221_CHAUDIERE_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.258636664 46.369113459</gml:pos>
        <gml:pos>-70.919440922 46.698170198</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240220_CHAUDIERE_RCM"/>
      <name>20240220_CHAUDIERE_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-70.818140345 45.7509217821696</gml:pos>
        <gml:pos>-70.4686465315131 46.249813674</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240220_ST-FRANCOIS_RCM"/>
      <name>20240220_ST-FRANCOIS_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.930643369 46.051457913</gml:pos>
        <gml:pos>-72.793315661 46.12887756</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240219_CHAUDIERE_RCM"/>
      <name>20240219_CHAUDIERE_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.354099023 46.3417372315296</gml:pos>
        <gml:pos>-70.9189499298041 46.767172674</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240221_YAMASKA_S2"/>
      <name>20240221_YAMASKA_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.2413171456918 45.1855115891869</gml:pos>
        <gml:pos>-72.2205545886265 46.4990005499973</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240221_CHAUDIERE_S2"/>
      <name>20240221_CHAUDIERE_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.4160884187617 45.6739203020918</gml:pos>
        <gml:pos>-70.4309002842063 46.9739336547537</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240221_YAMASKA_RCM"/>
      <name>20240221_YAMASKA_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.994258306 45.4325841235393</gml:pos>
        <gml:pos>-72.8689417640221 46.118849398</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240222_MONTREAL_RCM"/>
      <name>20240222_MONTREAL_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.009032696 45.116135804</gml:pos>
        <gml:pos>-73.815468413 45.228545657</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240222_ST-FRANCOIS_RCM"/>
      <name>20240222_ST-FRANCOIS_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.833040338 45.878680882</gml:pos>
        <gml:pos>-72.472310594 46.075528183</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240221_ST-FRANCOIS_S2"/>
      <name>20240221_ST-FRANCOIS_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.2518627404855 45.0069902282467</gml:pos>
        <gml:pos>-70.4066139430267 45.6952205395341</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240221_BECANCOUR_S2"/>
      <name>20240221_BECANCOUR_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.3499365339404 45.6444950031873</gml:pos>
        <gml:pos>-71.3418417747752 46.9520273473731</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240221_ST-FRANCOIS_RCM"/>
      <name>20240221_ST-FRANCOIS_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.926505339 46.025598003</gml:pos>
        <gml:pos>-72.767686556 46.130505822</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240221_MATAPEDIA_RCM"/>
      <name>20240221_MATAPEDIA_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.196370583 47.988701696</gml:pos>
        <gml:pos>-66.976309613 48.176178531</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240223_CHAUDIERE_S1"/>
      <name>20240223_CHAUDIERE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.5794138131475 45.6911406727393</gml:pos>
        <gml:pos>-70.415768033367 46.9568147029257</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240223_MATAPEDIA_RCM"/>
      <name>20240223_MATAPEDIA_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.1667187907307 47.8780675479143</gml:pos>
        <gml:pos>-66.7880609026525 48.1783004759094</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240223_ST-FRANCOIS_S1"/>
      <name>20240223_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.5847961711691 45.1823984783413</gml:pos>
        <gml:pos>-71.1352114057111 46.8656929690115</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240223_YAMASKA_S1"/>
      <name>20240223_YAMASKA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.576676592156 45.1800157760515</gml:pos>
        <gml:pos>-72.3466704637106 47.7404417025753</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240222_CHAUDIERE_RCM"/>
      <name>20240222_CHAUDIERE_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.415444666212 45.9899119357744</gml:pos>
        <gml:pos>-70.4514063212764 46.7139232612225</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240225_CHAUDIERE_RCM"/>
      <name>20240225_CHAUDIERE_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.2751160856417 46.3706882522634</gml:pos>
        <gml:pos>-70.9236758535987 46.7725525175995</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240224_MATAPEDIA_RCM"/>
      <name>20240224_MATAPEDIA_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.1971160735706 47.9815733827171</gml:pos>
        <gml:pos>-66.6675462593417 48.1756498003774</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240223_ST-FRANCOIS_RCM"/>
      <name>20240223_ST-FRANCOIS_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.3119634668517 45.0129818429266</gml:pos>
        <gml:pos>-71.5453889787576 45.856640465498</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240224_CHAUDIERE_RCM"/>
      <name>20240224_CHAUDIERE_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-70.8202308916152 45.7466196596992</gml:pos>
        <gml:pos>-70.468673218347 46.2613243464643</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240223_BECANCOUR_RCM"/>
      <name>20240223_BECANCOUR_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.107248635447 46.0020628914653</gml:pos>
        <gml:pos>-71.9555849036442 46.084448128494</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240224_ST-FRANCOIS_RCM"/>
      <name>20240224_ST-FRANCOIS_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.2540211028548 45.3253877404174</gml:pos>
        <gml:pos>-71.7769280646037 45.7625639570403</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240223_CHAUDIERE_RCM"/>
      <name>20240223_CHAUDIERE_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.3734896852628 46.4845561117296</gml:pos>
        <gml:pos>-71.1880812423514 46.7203956511129</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240224_YAMASKA_RCM"/>
      <name>20240224_YAMASKA_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.9201210007572 45.8577210853121</gml:pos>
        <gml:pos>-72.4520508022312 46.1251897701841</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240225_YAMASKA_RCM"/>
      <name>20240225_YAMASKA_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.9999014957358 45.4313291941977</gml:pos>
        <gml:pos>-72.8584702175648 46.1282670488766</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240224_MONTREAL_S1"/>
      <name>20240224_MONTREAL_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.6867834263541 45.0358422058121</gml:pos>
        <gml:pos>-73.3017051911075 46.5352647560344</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240224_ST-MAURICE_S1"/>
      <name>20240224_ST-MAURICE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.1390723995862 46.0482014101905</gml:pos>
        <gml:pos>-72.249644156289 47.1165075501798</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240224_ST-FRANCOIS_S1"/>
      <name>20240224_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.5847961711691 45.1823984783413</gml:pos>
        <gml:pos>-71.1352114057111 46.8656929690115</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240224_YAMASKA_S1"/>
      <name>20240224_YAMASKA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.4321934194363 45.1807723231157</gml:pos>
        <gml:pos>-72.356436837324 46.4827284624252</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240226_ST-FRANCOIS_RCM"/>
      <name>20240226_ST-FRANCOIS_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.5630145453259 45.6968361418095</gml:pos>
        <gml:pos>-72.2042263947457 45.9848884028995</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240225_MONTREAL_RCM"/>
      <name>20240225_MONTREAL_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.9211152277005 45.2946528017783</gml:pos>
        <gml:pos>-73.5487804281923 45.7267790007853</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240225_ST-FRANCOIS_RCM"/>
      <name>20240225_ST-FRANCOIS_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.928533649532 46.0282877688343</gml:pos>
        <gml:pos>-72.7694026411045 46.1298744328001</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240227_MATAPEDIA_RCM"/>
      <name>20240227_MATAPEDIA_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.1736687887368 47.875539354413</gml:pos>
        <gml:pos>-66.7865801885075 48.1815316388275</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240226_YAMASKA_S2"/>
      <name>20240226_YAMASKA_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.2413171456918 45.1855115891869</gml:pos>
        <gml:pos>-72.2205545886265 46.4990005499973</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240224_MONTREAL_S2"/>
      <name>20240224_MONTREAL_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.1447128514721 44.9702079062974</gml:pos>
        <gml:pos>-73.106293360806 46.2900858347461</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240226_ST-MAURICE_S2"/>
      <name>20240226_ST-MAURICE_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.3034112792125 46.4607661461654</gml:pos>
        <gml:pos>-71.3911056473458 47.1686129389395</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240224_YAMASKA_S2"/>
      <name>20240224_YAMASKA_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.2413171456918 45.1855115891869</gml:pos>
        <gml:pos>-72.2205545886265 46.4990005499973</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240226_CHAUDIERE_RCM"/>
      <name>20240226_CHAUDIERE_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.4288717504116 45.8066625569634</gml:pos>
        <gml:pos>-70.4470386431542 46.7651400733803</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240224_ST-MAURICE_S2"/>
      <name>20240224_ST-MAURICE_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.3034112792125 46.4607661461654</gml:pos>
        <gml:pos>-71.3911056473458 47.1686129389395</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240226_BECANCOUR_S2"/>
      <name>20240226_BECANCOUR_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.3499365339404 45.6444950031873</gml:pos>
        <gml:pos>-71.3418417747752 46.9520273473731</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240227_MATANE_RCM"/>
      <name>20240227_MATANE_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.547339354952 48.6664963358796</gml:pos>
        <gml:pos>-67.3678102614213 48.8582264357668</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240224_BECANCOUR_S2"/>
      <name>20240224_BECANCOUR_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.3499365339404 45.6444950031873</gml:pos>
        <gml:pos>-71.3418417747752 46.9520273473731</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240224_ROUGE_S2"/>
      <name>20240224_ROUGE_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-75.0852033169403 45.0871402639967</gml:pos>
        <gml:pos>-74.0216138918046 46.4142952026938</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240227_CHAUDIERE_RCM"/>
      <name>20240227_CHAUDIERE_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.3301613902787 46.3429145344538</gml:pos>
        <gml:pos>-70.9177192953695 46.7718071512537</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240224_ST-FRANCOIS_RCM_1"/>
      <name>20240224_ST-FRANCOIS_RCM_1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.9178611804739 45.8587230867966</gml:pos>
        <gml:pos>-72.4541373560822 46.1309790603506</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240227_ST-FRANCOIS_RCM"/>
      <name>20240227_ST-FRANCOIS_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.985353279478 45.0968458576236</gml:pos>
        <gml:pos>-71.7717314040514 45.490969937868</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240228_MATAPEDIA_RCM"/>
      <name>20240228_MATAPEDIA_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.1933996344101 47.9773399538107</gml:pos>
        <gml:pos>-66.9673878965312 48.1786316578591</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240228_CHAUDIERE_RCM"/>
      <name>20240228_CHAUDIERE_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-70.8241880805935 45.7481232234362</gml:pos>
        <gml:pos>-70.4657506307954 46.2627033029161</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240301_YAMASKA_RCM"/>
      <name>20240301_YAMASKA_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.9814024409596 45.6042591523722</gml:pos>
        <gml:pos>-72.8598541733308 46.119646264073</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240301_ST-FRANCOIS_RCM"/>
      <name>20240301_ST-FRANCOIS_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.9324101413586 46.0131822284016</gml:pos>
        <gml:pos>-72.7260771872699 46.1394316158349</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240229_MONTREAL_RCM"/>
      <name>20240229_MONTREAL_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.9187875878036 45.1866544229323</gml:pos>
        <gml:pos>-73.5202450301614 45.7432329433528</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240229_MONTREAL_S1"/>
      <name>20240229_MONTREAL_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.2819693876745 45.047657107523</gml:pos>
        <gml:pos>-73.2117234506923 46.5109779715421</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240229_ROUGE_S1"/>
      <name>20240229_ROUGE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-75.1110187828609 45.4194968588226</gml:pos>
        <gml:pos>-74.1776346056257 46.5184857597305</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240302_BECANCOUR_S1"/>
      <name>20240302_BECANCOUR_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.6090928164009 45.4688779398953</gml:pos>
        <gml:pos>-71.4420528587653 46.8048226147754</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240302_BECANCOUR_RCM"/>
      <name>20240302_BECANCOUR_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.1044573600081 46.0035818518427</gml:pos>
        <gml:pos>-71.9595709526976 46.0798112856541</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240302_ST-FRANCOIS_S1"/>
      <name>20240302_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.4058361416469 44.8754147553144</gml:pos>
        <gml:pos>-70.2001720166539 45.8419441311162</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240302_SAGUENAY_S1"/>
      <name>20240302_SAGUENAY_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.9096841047796 48.2155706040563</gml:pos>
        <gml:pos>-70.921383931803 49.7770183915821</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240302_CHAUDIERE_S1"/>
      <name>20240302_CHAUDIERE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.5794138131475 45.6911406727393</gml:pos>
        <gml:pos>-70.415768033367 46.9568147029257</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240302_MATAPEDIA_RCM"/>
      <name>20240302_MATAPEDIA_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.1705406238355 47.8770253941794</gml:pos>
        <gml:pos>-66.7842211193486 48.1788067882696</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240301_MONTREAL_RCM"/>
      <name>20240301_MONTREAL_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.0131561859617 45.113338673156</gml:pos>
        <gml:pos>-73.7777690200436 45.3327372768608</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240302_MONTREAL_RCM"/>
      <name>20240302_MONTREAL_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.8012097194093 45.3027127786709</gml:pos>
        <gml:pos>-73.7358177725677 45.4211252229516</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240301_CHAUDIERE_RCM"/>
      <name>20240301_CHAUDIERE_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.3836440247977 45.9764051135529</gml:pos>
        <gml:pos>-70.4470055013475 46.6338263143129</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240304_CHAUDIERE_RCM"/>
      <name>20240304_CHAUDIERE_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.2584193635925 46.3650911012113</gml:pos>
        <gml:pos>-70.9168960071131 46.6970063837232</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240303_ST-FRANCOIS_RCM"/>
      <name>20240303_ST-FRANCOIS_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.9185414464568 45.8594640151585</gml:pos>
        <gml:pos>-72.4538313408996 46.1382900784928</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240303_CHAUDIERE_RCM"/>
      <name>20240303_CHAUDIERE_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-70.8323306973964 45.7507448901205</gml:pos>
        <gml:pos>-70.4598050301975 46.2699788570016</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240302_ST-FRANCOIS_RCM"/>
      <name>20240302_ST-FRANCOIS_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.3171265783576 45.0089623880326</gml:pos>
        <gml:pos>-71.5300591047871 45.8609310670705</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240304_MONTREAL_RCM"/>
      <name>20240304_MONTREAL_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.979659984648 45.2947760434005</gml:pos>
        <gml:pos>-73.76009236979 45.638175630619</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240304_YAMASKA_RCM"/>
      <name>20240304_YAMASKA_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.9783403301846 45.8537038181822</gml:pos>
        <gml:pos>-72.8738521581007 46.1201177765583</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240304_ST-FRANCOIS_RCM"/>
      <name>20240304_ST-FRANCOIS_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.9324081405574 45.1729006235122</gml:pos>
        <gml:pos>-71.7349171961793 46.131600823965</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240305_ST-FRANCOIS_RCM"/>
      <name>20240305_ST-FRANCOIS_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.5623000893984 45.7292806046448</gml:pos>
        <gml:pos>-72.2165380203175 45.9804223632611</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240304_MATAPEDIA_RCM"/>
      <name>20240304_MATAPEDIA_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.1966046305461 47.9874462268455</gml:pos>
        <gml:pos>-66.977802620303 48.1774348036409</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240304_MATANE_S1"/>
      <name>20240304_MATANE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.8089787788585 48.4740655773602</gml:pos>
        <gml:pos>-66.8479347586611 49.1196014562819</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240304_MATAPEDIA_S1"/>
      <name>20240304_MATAPEDIA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.4278850050651 47.7551603263604</gml:pos>
        <gml:pos>-66.3912936118013 48.2242297906914</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240306_MATAPEDIA_RCM"/>
      <name>20240306_MATAPEDIA_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.1653998402912 47.8767814010873</gml:pos>
        <gml:pos>-66.7883876636977 48.1770854724865</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240305_MONTREAL_S2"/>
      <name>20240305_MONTREAL_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.1447128514721 44.9702079062974</gml:pos>
        <gml:pos>-73.106293360806 46.2900858347461</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240306_MONTREAL_RCM"/>
      <name>20240306_MONTREAL_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.0163640824076 45.110256655014</gml:pos>
        <gml:pos>-73.6504319646068 45.7021032929177</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240305_BECANCOUR_S2"/>
      <name>20240305_BECANCOUR_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.3499365339404 45.6444950031873</gml:pos>
        <gml:pos>-71.3418417747752 46.9520273473731</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240305_YAMASKA_S2"/>
      <name>20240305_YAMASKA_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.2413171456918 45.1855115891869</gml:pos>
        <gml:pos>-72.2205545886265 46.4990005499973</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240306_MATANE_RCM"/>
      <name>20240306_MATANE_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.553490669092 48.6683444848245</gml:pos>
        <gml:pos>-67.3637747758161 48.8623140976806</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240305_CHAUDIERE_RCM"/>
      <name>20240305_CHAUDIERE_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.2501587358299 45.986017400645</gml:pos>
        <gml:pos>-70.4511532247912 46.6096930767361</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240305_ST-MAURICE_S2"/>
      <name>20240305_ST-MAURICE_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.3034112792125 46.4607661461654</gml:pos>
        <gml:pos>-71.3911056473458 47.1686129389395</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240305_ST-FRANCOIS_S2"/>
      <name>20240305_ST-FRANCOIS_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.2518627404855 45.0069902282467</gml:pos>
        <gml:pos>-70.4066139430267 45.6952205395341</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240305_ROUGE_S2"/>
      <name>20240305_ROUGE_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-75.0852033169403 45.0871402639967</gml:pos>
        <gml:pos>-74.0216138918046 46.4142952026938</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240306_CHAUDIERE_RCM"/>
      <name>20240306_CHAUDIERE_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.3410269753608 46.5041426588595</gml:pos>
        <gml:pos>-71.0947431348179 46.7790641552795</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240306_BECANCOUR_RCM"/>
      <name>20240306_BECANCOUR_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.1081544241208 46.0021893991333</gml:pos>
        <gml:pos>-71.9516794041012 46.092535095216</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240306_ST-FRANCOIS_RCM"/>
      <name>20240306_ST-FRANCOIS_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.3080834550572 45.0107012231296</gml:pos>
        <gml:pos>-71.5305953788964 45.8512076399276</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240307_CHAUDIERE_RCM"/>
      <name>20240307_CHAUDIERE_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-70.8251599660525 45.7452759674109</gml:pos>
        <gml:pos>-70.4643521715283 46.2665862490277</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240106_ST-FRANCOIS_S1_1"/>
      <name>20240106_ST-FRANCOIS_S1_1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.5847961711691 45.1823984783413</gml:pos>
        <gml:pos>-71.1352114057111 46.8656929690115</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240106_YAMASKA_S1_1"/>
      <name>20240106_YAMASKA_S1_1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.576676592156 45.1800157760515</gml:pos>
        <gml:pos>-72.3466704637106 47.7404417025753</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240307_MATAPEDIA_RCM"/>
      <name>20240307_MATAPEDIA_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.1949278613172 47.9788360544467</gml:pos>
        <gml:pos>-66.9672929533543 48.1802828756527</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240224_YAMASKA_S1_1"/>
      <name>20240224_YAMASKA_S1_1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.4321934194363 45.1807723231157</gml:pos>
        <gml:pos>-72.356436837324 46.4827284624252</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240106_CHAUDIERE_S1_1"/>
      <name>20240106_CHAUDIERE_S1_1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.5794138131475 45.6911406727393</gml:pos>
        <gml:pos>-70.415768033367 46.9568147029257</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240106_ST-FRANCOIS_S1_2"/>
      <name>20240106_ST-FRANCOIS_S1_2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.5847961711691 45.1823984783413</gml:pos>
        <gml:pos>-71.1352114057111 46.8656929690115</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240307_MATAPEDIA_RCM_1"/>
      <name>20240307_MATAPEDIA_RCM_1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-66.8589323444748 47.9806409821063</gml:pos>
        <gml:pos>-66.6680087411722 48.0333438517679</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240307_ST-MAURICE_S1"/>
      <name>20240307_ST-MAURICE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.1390723995862 46.0482014101905</gml:pos>
        <gml:pos>-72.249644156289 47.1165075501798</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240106_YAMASKA_S1_2"/>
      <name>20240106_YAMASKA_S1_2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.576676592156 45.1800157760515</gml:pos>
        <gml:pos>-72.3466704637106 47.7404417025753</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240224_YAMASKA_S1_2"/>
      <name>20240224_YAMASKA_S1_2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.4321934194363 45.1807723231157</gml:pos>
        <gml:pos>-72.356436837324 46.4827284624252</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240106_CHAUDIERE_S1_2"/>
      <name>20240106_CHAUDIERE_S1_2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.5794138131475 45.6911406727393</gml:pos>
        <gml:pos>-70.415768033367 46.9568147029257</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240307_ST-FRANCOIS_S1"/>
      <name>20240307_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.5847961711691 45.1823984783413</gml:pos>
        <gml:pos>-71.1352114057111 46.8656929690115</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240307_MONTREAL_S1"/>
      <name>20240307_MONTREAL_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.6867834263541 45.0358422058121</gml:pos>
        <gml:pos>-73.3017051911075 46.5352647560344</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240307_YAMASKA_S1"/>
      <name>20240307_YAMASKA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.4321934194363 45.1807723231157</gml:pos>
        <gml:pos>-72.356436837324 46.4827284624252</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240308_CHAUDIERE_RCM"/>
      <name>20240308_CHAUDIERE_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.2635668887244 46.3620372953696</gml:pos>
        <gml:pos>-70.9188144537181 46.7029269579949</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240307_ST-FRANCOIS_RCM"/>
      <name>20240307_ST-FRANCOIS_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.9332141981387 45.3416048270424</gml:pos>
        <gml:pos>-71.7743404401466 46.1320573258938</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240308_YAMASKA_RCM"/>
      <name>20240308_YAMASKA_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.0032291385382 45.4315489356151</gml:pos>
        <gml:pos>-72.8601694608484 46.1161916788447</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240309_CHAUDIERE_RCM"/>
      <name>20240309_CHAUDIERE_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.3822635649429 45.9872726276273</gml:pos>
        <gml:pos>-70.4543060791328 46.6361523312388</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240310_MONTREAL_RCM"/>
      <name>20240310_MONTREAL_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.9806031503365 45.3020852020748</gml:pos>
        <gml:pos>-73.6573254165173 45.6980007875284</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240309_ST-FRANCOIS_RCM"/>
      <name>20240309_ST-FRANCOIS_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.5656074244674 45.7292204589803</gml:pos>
        <gml:pos>-72.2155769150825 45.9797887471192</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240308_ST-FRANCOIS_RCM"/>
      <name>20240308_ST-FRANCOIS_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.9316974821681 46.0316026566293</gml:pos>
        <gml:pos>-72.7664934186468 46.134926160275</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240310_MATAPEDIA_RCM"/>
      <name>20240310_MATAPEDIA_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.1751264813237 47.8773954934488</gml:pos>
        <gml:pos>-66.7838250578848 48.1772980442596</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240308_MONTREAL_RCM"/>
      <name>20240308_MONTREAL_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.919829062179 45.2976645038246</gml:pos>
        <gml:pos>-73.5462077506296 45.7332098283927</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240311_MATAPEDIA_RCM"/>
      <name>20240311_MATAPEDIA_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.2014446824325 47.9843794318935</gml:pos>
        <gml:pos>-66.9677192532003 48.176799936132</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240311_CHAUDIERE_RCM"/>
      <name>20240311_CHAUDIERE_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-70.822579128939 45.7417886638967</gml:pos>
        <gml:pos>-70.4608446024342 46.2667893712296</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240310_ST-FRANCOIS_RCM"/>
      <name>20240310_ST-FRANCOIS_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.2996263997992 45.0993325686621</gml:pos>
        <gml:pos>-71.7523487313866 45.8190801793566</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240310_CHAUDIERE_RCM"/>
      <name>20240310_CHAUDIERE_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.3546102054686 46.2431835050128</gml:pos>
        <gml:pos>-70.8278200320376 46.7675033845473</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240311_MATAPEDIA_RCM_1"/>
      <name>20240311_MATAPEDIA_RCM_1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-66.8626180317818 47.9694318764934</gml:pos>
        <gml:pos>-66.6660447511814 48.0359490977067</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240311_BONAVENTURE_S1"/>
      <name>20240311_BONAVENTURE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-66.2383365353555 47.6516695928692</gml:pos>
        <gml:pos>-64.2330405512553 48.4099662118703</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240311_ST-FRANCOIS_RCM"/>
      <name>20240311_ST-FRANCOIS_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.9371510463101 46.0452443025116</gml:pos>
        <gml:pos>-72.7917683402656 46.1344982422985</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240311_YAMASKA_RCM"/>
      <name>20240311_YAMASKA_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.9776373695124 45.7857637765334</gml:pos>
        <gml:pos>-72.8727409866701 46.1170155118248</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240312_CHAUDIERE_RCM"/>
      <name>20240312_CHAUDIERE_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.0291079232116 46.2397894991691</gml:pos>
        <gml:pos>-70.7982524374529 46.4447963011941</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240312_YAMASKA_RCM"/>
      <name>20240312_YAMASKA_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.0011204956067 45.4374020748273</gml:pos>
        <gml:pos>-72.8608205932997 46.1229009972632</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240312_ST-FRANCOIS_RCM"/>
      <name>20240312_ST-FRANCOIS_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.9390113765321 46.0170854610621</gml:pos>
        <gml:pos>-72.764185708026 46.1436040369548</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240312_ROUGE_S1"/>
      <name>20240312_ROUGE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-75.1110187828609 45.4194968588226</gml:pos>
        <gml:pos>-74.1776346056257 46.5184857597305</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240312_MONTREAL_S1"/>
      <name>20240312_MONTREAL_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.2819693876745 45.047657107523</gml:pos>
        <gml:pos>-73.2117234506923 46.5109779715421</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240314_MATANE_RCM"/>
      <name>20240314_MATANE_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.5494832453852 48.6702235249989</gml:pos>
        <gml:pos>-67.3668092387433 48.8588542927269</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240313_CHAUDIERE_RCM"/>
      <name>20240313_CHAUDIERE_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.374259265439 45.9881234579878</gml:pos>
        <gml:pos>-70.4471514806507 46.679173826183</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240315_CHAUDIERE_RCM"/>
      <name>20240315_CHAUDIERE_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-70.834589983907 45.743322093031</gml:pos>
        <gml:pos>-70.4600987748722 46.2700240468475</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240314_BECANCOUR_RCM"/>
      <name>20240314_BECANCOUR_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.110308662 46.0021495680683</gml:pos>
        <gml:pos>-71.9565981066522 46.093063738087</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240314_SAGUENAY_S1"/>
      <name>20240314_SAGUENAY_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.9096841047796 48.2155706040563</gml:pos>
        <gml:pos>-70.921383931803 49.7770183915821</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240314_CHAUDIERE_RCM"/>
      <name>20240314_CHAUDIERE_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.3503510870622 46.439293965927</gml:pos>
        <gml:pos>-71.0313735027608 46.7735519135483</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240316_MATANE_S1"/>
      <name>20240316_MATANE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.8089787788585 48.4740655773602</gml:pos>
        <gml:pos>-66.8479347586611 49.1196014562819</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240315_MATAPEDIA_RCM"/>
      <name>20240315_MATAPEDIA_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-66.8614511090435 47.979258737123</gml:pos>
        <gml:pos>-66.667018360697 48.0353311027511</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240316_BONAVENTURE_S2"/>
      <name>20240316_BONAVENTURE_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-66.7100304864465 47.7134531566984</gml:pos>
        <gml:pos>-64.7610857011313 48.4035626119923</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240316_MATAPEDIA_S1"/>
      <name>20240316_MATAPEDIA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.4278850050651 47.7551603263604</gml:pos>
        <gml:pos>-66.3912936118013 48.2242297906914</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240318_MATAPEDIA_RCM"/>
      <name>20240318_MATAPEDIA_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.1745825015117 47.8743961312732</gml:pos>
        <gml:pos>-66.7828041546562 48.1853428861196</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240316_MATAPEDIA_RCM"/>
      <name>20240316_MATAPEDIA_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.1942442401086 47.985084437448</gml:pos>
        <gml:pos>-66.9735958402996 48.1795171857946</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240316_MATAPEDIA_S2"/>
      <name>20240316_MATAPEDIA_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.6607540594603 47.7624440535401</gml:pos>
        <gml:pos>-66.6613113441267 49.0573823534878</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240319_MATAPEDIA_RCM"/>
      <name>20240319_MATAPEDIA_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67 47.9801694014446</gml:pos>
        <gml:pos>-66.967357276939 48.1784541192467</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240319_MONTREAL_S1"/>
      <name>20240319_MONTREAL_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.6867834263541 45.0358422058121</gml:pos>
        <gml:pos>-73.3017051911075 46.5352647560344</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240319_ST-MAURICE_S1"/>
      <name>20240319_ST-MAURICE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.1390723995862 46.0482014101905</gml:pos>
        <gml:pos>-72.249644156289 47.1165075501798</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240319_MATAPEDIA_RCM_1"/>
      <name>20240319_MATAPEDIA_RCM_1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-66.861879942432 47.9808722427395</gml:pos>
        <gml:pos>-66.6704245609481 48.0244555816139</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240319_ST-FRANCOIS_S1"/>
      <name>20240319_ST-FRANCOIS_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.5847961711691 45.1823984783413</gml:pos>
        <gml:pos>-71.1352114057111 46.8656929690115</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240319_YAMASKA_S1"/>
      <name>20240319_YAMASKA_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.4321934194363 45.1807723231157</gml:pos>
        <gml:pos>-72.356436837324 46.4827284624252</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240322_MATAPEDIA_RCM"/>
      <name>20240322_MATAPEDIA_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.1714632347534 47.8773832351593</gml:pos>
        <gml:pos>-66.783123447559 48.1774639798095</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240322_MATANE_RCM"/>
      <name>20240322_MATANE_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.5566167006499 48.6709904675776</gml:pos>
        <gml:pos>-67.3695241970872 48.8642171515849</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240323_MATAPEDIA_RCM"/>
      <name>20240323_MATAPEDIA_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.8621258361401 47.9788152600794</gml:pos>
        <gml:pos>-66.6668886256617 48.0356953922661</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240323_MATAPEDIA_RCM_1"/>
      <name>20240323_MATAPEDIA_RCM_1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.1934187264853 47.9814532522308</gml:pos>
        <gml:pos>-66.9661620019219 48.1806920244507</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240323_MATAPEDIA_L9"/>
      <name>20240323_MATAPEDIA_L9</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.6607540594603 47.7624440535401</gml:pos>
        <gml:pos>-66.6613113441267 49.0573823534878</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240323_BONAVENTURE_L9"/>
      <name>20240323_BONAVENTURE_L9</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-66.6859310259462 48.3538724883191</gml:pos>
        <gml:pos>-64.7101322394038 49.0451755542285</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240324_ROUGE_S1"/>
      <name>20240324_ROUGE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-75.1110187828609 45.4194968588226</gml:pos>
        <gml:pos>-74.1776346056257 46.5184857597305</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240322_SAGUENAY_S2"/>
      <name>20240322_SAGUENAY_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.894093522702 48.2354462353629</gml:pos>
        <gml:pos>-71.8172127473358 49.5520208539481</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240324_MATANE_S2"/>
      <name>20240324_MATANE_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.6607540594603 47.7624440535401</gml:pos>
        <gml:pos>-66.6613113441267 49.0573823534878</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240322_SAGUENAY_S2_1"/>
      <name>20240322_SAGUENAY_S2_1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.9085850286907 48.2694643743433</gml:pos>
        <gml:pos>-70.8568539366696 49.5781839706446</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240323_BONAVENTURE_S1"/>
      <name>20240323_BONAVENTURE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-66.2383365353555 47.6516695928692</gml:pos>
        <gml:pos>-64.2330405512553 48.4099662118703</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240323_BONAVENTURE_L9_1"/>
      <name>20240323_BONAVENTURE_L9_1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-66.7100304864465 47.7134531566984</gml:pos>
        <gml:pos>-64.7610857011313 48.4035626119923</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240324_MONTREAL_S1"/>
      <name>20240324_MONTREAL_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.2819693876745 45.047657107523</gml:pos>
        <gml:pos>-73.2117234506923 46.5109779715421</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240325_ROUGE_S2"/>
      <name>20240325_ROUGE_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-75.0852033169403 45.0871402639967</gml:pos>
        <gml:pos>-74.0216138918046 46.4142952026938</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240326_MATAPEDIA_RCM"/>
      <name>20240326_MATAPEDIA_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.1788098153413 47.8758161017956</gml:pos>
        <gml:pos>-66.7852607926446 48.1848135766472</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240325_BECANCOUR_S2"/>
      <name>20240325_BECANCOUR_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.3499365339404 45.6444950031873</gml:pos>
        <gml:pos>-71.3418417747752 46.9520273473731</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240325_YAMASKA_S2"/>
      <name>20240325_YAMASKA_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.2413171456918 45.1855115891869</gml:pos>
        <gml:pos>-72.2205545886265 46.4990005499973</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240325_ST-MAURICE_S2"/>
      <name>20240325_ST-MAURICE_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-73.3034112792125 46.4607661461654</gml:pos>
        <gml:pos>-71.3911056473458 47.1686129389395</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240325_MONTREAL_S2"/>
      <name>20240325_MONTREAL_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-74.1447128514721 44.9702079062974</gml:pos>
        <gml:pos>-73.106293360806 46.2900858347461</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240326_MATAPEDIA_S2"/>
      <name>20240326_MATAPEDIA_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.6607540594603 47.7624440535401</gml:pos>
        <gml:pos>-66.6613113441267 49.0573823534878</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240326_BONAVENTURE_S2"/>
      <name>20240326_BONAVENTURE_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-66.7100304864465 47.7134531566984</gml:pos>
        <gml:pos>-64.7610857011313 48.4035626119923</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240327_MATAPEDIA_RCM"/>
      <name>20240327_MATAPEDIA_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.1919472851406 47.9834602666336</gml:pos>
        <gml:pos>-66.9678044146886 48.1834766475578</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240326_BONAVENTURE_S2_1"/>
      <name>20240326_BONAVENTURE_S2_1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-66.6859310259462 48.3538724883191</gml:pos>
        <gml:pos>-64.7101322394038 49.0451755542285</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240327_MATAPEDIA_RCM_1"/>
      <name>20240327_MATAPEDIA_RCM_1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-66.8632290599157 47.9780805493422</gml:pos>
        <gml:pos>-66.6611390783864 48.0322722762327</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240404_BONAVENTURE_S1"/>
      <name>20240404_BONAVENTURE_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-66.2383365353555 47.6516695928692</gml:pos>
        <gml:pos>-64.2330405512553 48.4099662118703</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240405_BECANCOUR_RCM"/>
      <name>20240405_BECANCOUR_RCM</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.9207941324454 45.9816352147101</gml:pos>
        <gml:pos>-71.8602951754242 46.0204228524778</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240407_SAGUENAY_S1"/>
      <name>20240407_SAGUENAY_S1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.9096841047796 48.2155706040563</gml:pos>
        <gml:pos>-70.921383931803 49.7770183915821</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240408_BONAVENTURE_L9"/>
      <name>20240408_BONAVENTURE_L9</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-66.6859310259462 48.3538724883191</gml:pos>
        <gml:pos>-64.7101322394038 49.0451755542285</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240408_MATAPEDIA_L9"/>
      <name>20240408_MATAPEDIA_L9</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-67.6607540594603 47.7624440535401</gml:pos>
        <gml:pos>-66.6613113441267 49.0573823534878</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240408_BONAVENTURE_L9_1"/>
      <name>20240408_BONAVENTURE_L9_1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-66.7100304864465 47.7134531566984</gml:pos>
        <gml:pos>-64.7610857011313 48.4035626119923</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240409_SAGUENAY_S2"/>
      <name>20240409_SAGUENAY_S2</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-72.894093522702 48.2354462353629</gml:pos>
        <gml:pos>-71.8172127473358 49.5520208539481</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
    <CoverageOfferingBrief>
      <metadataLink metadataType="TC211" xlink:type="simple" xlink:href="https://geoegl.msp.gouv.qc.ca/apis/wss/historiqueglace.fcgi?request=GetMetadata&amp;layer=20240409_SAGUENAY_S2_1"/>
      <name>20240409_SAGUENAY_S2_1</name>
      <lonLatEnvelope srsName="urn:ogc:def:crs:OGC:1.3:CRS84">
        <gml:pos>-71.9085850286907 48.2694643743433</gml:pos>
        <gml:pos>-70.8568539366696 49.5781839706446</gml:pos>
      </lonLatEnvelope>
    </CoverageOfferingBrief>
  </ContentMetadata>
</WCS_Capabilities>