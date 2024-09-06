<!DOCTYPE qgis PUBLIC 'http://mrcc.com/qgis.dtd' 'SYSTEM'>
<qgis minScale="1e+08" styleCategories="AllStyleCategories" hasScaleBasedVisibilityFlag="0" maxScale="0" version="3.12.2-BucureÈ™ti">
  <flags>
    <Identifiable>1</Identifiable>
    <Removable>1</Removable>
    <Searchable>1</Searchable>
  </flags>
  <customproperties>
    <property value="false" key="WMSBackgroundLayer"/>
    <property value="false" key="WMSPublishDataSourceUrl"/>
    <property value="0" key="embeddedWidgets/count"/>
    <property value="Value" key="identify/format"/>
  </customproperties>
  <pipe>
    <rasterrenderer band="1" classificationMin="0" alphaBand="-1" type="singlebandpseudocolor" opacity="1" nodataColor="" classificationMax="18">
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
        <colorrampshader colorRampType="INTERPOLATED" clip="0" classificationMode="1">
          <colorramp type="gradient" name="[source]">
            <prop k="color1" v="194,82,60,255"/>
            <prop k="color2" v="11,44,122,255"/>
            <prop k="discrete" v="0"/>
            <prop k="rampType" v="gradient"/>
            <prop k="stops" v="0.2;237,161,18,255:0.4;255,255,0,255:0.6;0,219,0,255:0.8;32,153,143,255"/>
          </colorramp>
          <item label="0" alpha="255" color="#c2523c" value="0"/>
          <item label="3.6" alpha="255" color="#eda112" value="3.6"/>
          <item label="7.2" alpha="255" color="#ffff00" value="7.2"/>
          <item label="10.8" alpha="255" color="#00db00" value="10.8"/>
          <item label="14.4" alpha="255" color="#20998f" value="14.4"/>
          <item label="18" alpha="255" color="#0b2c7a" value="18"/>
        </colorrampshader>
      </rastershader>
    </rasterrenderer>
    <brightnesscontrast brightness="0" contrast="0"/>
    <huesaturation grayscaleMode="0" colorizeBlue="128" colorizeGreen="128" colorizeOn="0" colorizeStrength="100" saturation="0" colorizeRed="255"/>
    <rasterresampler maxOversampling="2"/>
  </pipe>
  <blendMode>0</blendMode>
</qgis>
