<?xml version="1.0" encoding="UTF-8"?>

<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">
  <html>
  <body>
  <h2>Doctor's Info</h2>
  <table border="1">
    <tr bgcolor="#9acd32">
      <th>Name</th>
      <th>Degree</th>
	<th>Experience</th>
    </tr>
    <xsl:for-each select="doctorsinfo/doctor">
    <tr>
      <td><xsl:value-of select="name"/></td>
      <td><xsl:value-of select="degree"/></td>
	<td><xsl:value-of select="noy"/></td>
    </tr>
    </xsl:for-each>
  </table>
  </body>
  </html>
</xsl:template>

</xsl:stylesheet>