<?xml version="1.0" encoding="UTF-8"?>
<html xsl:version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<body style="margin-top:40px; font-family:Arial;font-size:12pt;background-color:#EEEEEE">
<center >
<table style="width:700px;height:auto;">
  <tr>
      <th><div style="background-color:teal;color:white;padding:4px">ID</div></th>
      <th><div style="background-color:teal;color:white;padding:4px">Product Name</div></th>
      <th><div style="background-color:teal;color:white;padding:4px">Price</div></th>
      <th><div style="background-color:teal;color:white;padding:4px">Unit</div></th>
  </tr>

  <xsl:for-each select="product_list/product">
    <tr>
      <td><span style="font-weight:bold"><xsl:value-of select="ID"/> </span></td>
      <td><span style="font-weight:bold"><xsl:value-of select="name"/> </span></td>
      <td><xsl:value-of select="price"/></td>
      <td><xsl:value-of select="unit"/></td>
    </tr>
  </xsl:for-each>
</table>
</center>
</body>
</html>