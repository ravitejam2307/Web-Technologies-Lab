<?xml version="1.0"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
<xsl:template match="/">
<html>
<head>
<title>Books Details</title>
</head>
<body>
<h1 style="text-align:center">Books Details</h1>
<table border="1"  width="100%">
<tr>
<th style="color:grey">Title of the book</th>
<th style="color:grey">Author Name</th>
<th style="color:grey">Edition</th>
<th style="color:grey">Price</th>
</tr>
<xsl:for-each select="data/inner">
<tr>
<td style="color:purple;text-align:center">
<xsl:value-of  select="title"/>
</td>
<td style="color:brown;text-align:center">
<b><xsl:value-of  select="author" /></b>
</td>
<td style="color:orange;text-align:center">
<xsl:value-of  select="edition"/>
</td>
<td style="color:magenta;text-align:center">
<xsl:value-of  select="price"/>
</td>
</tr>
</xsl:for-each>
</table>
</body>
</html>
</xsl:template>
</xsl:stylesheet>