<!DOCTYPE qgis PUBLIC 'http://mrcc.com/qgis.dtd' 'SYSTEM'>
<qgis hasScaleBasedVisibilityFlag="0" version="3.16.6-Hannover" styleCategories="AllStyleCategories" minScale="1e+08" maxScale="0">
  <flags>
    <Identifiable>1</Identifiable>
    <Removable>1</Removable>
    <Searchable>1</Searchable>
  </flags>
  <temporal fetchMode="0" enabled="0" mode="0">
    <fixedRange>
      <start></start>
      <end></end>
    </fixedRange>
  </temporal>
  <customproperties>
    <property key="WMSBackgroundLayer" value="false"/>
    <property key="WMSPublishDataSourceUrl" value="false"/>
    <property key="embeddedWidgets/count" value="0"/>
  </customproperties>
  <pipe>
    <provider>
      <resampling zoomedInResamplingMethod="nearestNeighbour" enabled="false" maxOversampling="2" zoomedOutResamplingMethod="nearestNeighbour"/>
    </provider>
    <rasterrenderer opacity="1" band="1" nodataColor="" classificationMin="0" classificationMax="90" alphaBand="-1" type="singlebandpseudocolor">
      <rasterTransparency/>
      <minMaxOrigin>
        <limits>None</limits>
        <extent>WholeRaster</extent>
        <statAccuracy>Estimated</statAccuracy>
        <cumulativeCutLower>0.02</cumulativeCutLower>
        <cumulativeCutUpper>0.98</cumulativeCutUpper>
        <stdDevFactor>2</stdDevFactor>
      </minMaxOrigin>
      <rastershader>
        <colorrampshader colorRampType="DISCRETE" maximumValue="90" labelPrecision="0" minimumValue="0" clip="0" classificationMode="1">
          <colorramp name="[source]" type="gradient">
            <prop v="255,255,255,0" k="color1"/>
            <prop v="78,78,78,255" k="color2"/>
            <prop v="0" k="discrete"/>
            <prop v="gradient" k="rampType"/>
            <prop v="0.0333333;209,255,115,255:0.0888889;76,230,0,255:0.166667;254,235,117,255:0.333333;255,179,0,255:0.444444;255,0,197,255:0.555556;255,0,0,255:0.777778;178,178,178,255" k="stops"/>
          </colorramp>
          <item label="Nulle" alpha="0" value="0" color="#ffffff"/>
          <item label="0 à 0,1 %" alpha="255" value="0.1" color="#2d13c3"/>
          <item label="0,1 à 0,5 %" alpha="255" value="0.5" color="#005ce6"/>
          <item label="0,5 à 1 %" alpha="255" value="1" color="#0dbbf5"/>
          <item label="1 à 2 %" alpha="255" value="2" color="#0fec68"/>
          <item label="2 à 4 %" alpha="255" value="4" color="#f9f7b8"/>
          <item label="4 à 6 %" alpha="255" value="6" color="#ffdf0d"/>
          <item label="6 à 8 %" alpha="255" value="8" color="#ffad15"/>
          <item label="8 à 10 %" alpha="255" value="10" color="#f60909"/>
          <item label="10 % et plus" alpha="255" value="40" color="#8f1717"/>
        </colorrampshader>
      </rastershader>
    </rasterrenderer>
    <brightnesscontrast gamma="1" contrast="0" brightness="0"/>
    <huesaturation grayscaleMode="0" colorizeRed="255" colorizeOn="0" colorizeGreen="128" saturation="0" colorizeBlue="128" colorizeStrength="100"/>
    <rasterresampler maxOversampling="2"/>
    <resamplingStage>resamplingFilter</resamplingStage>
  </pipe>
  <blendMode>0</blendMode>
</qgis>
