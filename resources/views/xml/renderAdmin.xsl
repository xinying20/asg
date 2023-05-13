<?xml version="1.0" encoding="UTF-8"?>

<!--
    Document   : renderAdmin.xsl
    Created on : 9 May 2023, 10:10 pm
    Author     : Chris
    Description:
        Purpose of transformation follows.
-->

<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
    <xsl:output method="html"/>

    <!-- TODO customize transformation rules 
         syntax recommendation http://www.w3.org/TR/xslt 
    -->
    <xsl:template match="/">
        <html>
            <head>
                <link rel="icon" href="/images/icon.png" />
                <meta charset="utf-8" />
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
                <!-- Bootstrap Library -->
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
                <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
            </head>
            <STYLE>
                #title{
                padding:10px;
                font-weight:700px;
                font-size:1.45rem;
                font-family: calibri;
                }

                a{
                color:#6666CC;
                }
            </STYLE>
            <body>
                <div>
                    <div id="title">
                        <b>Super Administrator Table Information</b>
                    </div>
                    <hr style="margin:0px;border-bottom:1px solid lightgrey;border-top: none;"/>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb p-3 bg-light">
                            <li class="breadcrumb-item">
                                <a href="#">Admin</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Admin XML</li>
                        </ol>
                    </nav>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active p-5" id="super_admin" role="tabpanel" aria-labelledby="super_admin-tab">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Email</th>
                                        <th scope="col">Password</th>
                                  
                                    </tr>
                                </thead>
                                <tbody>
                                    <xsl:for-each select="employee/admin">
                                        <tr>
                                            <td>
                                                <xsl:value-of select="ID"/>
                                            </td>
                                            <td>
                                                <xsl:value-of select="email"/>
                                            </td>
                                            <td>
                                                <xsl:value-of select="password"/>
                                            </td>
                                        </tr>
                                    </xsl:for-each>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </body>
        </html>
    </xsl:template>

</xsl:stylesheet>
