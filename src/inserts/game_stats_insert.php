<?php
                                if(isset($_POST['submit']))
                                    {   $sp_id=$_POST['hd_spiel_id'];
                                        $bluekills=$_POST['bluekills'];
                                        $bluedrakes=$_POST['bluedrakes'];
                                        $bluenashes=$_POST['bluenashes'];
                                        $blueturret=$_POST['blueturret'];
                                        $blueinhib=$_POST['blueinhib'];
                                        $redkills=$_POST['redkills'];
                                        $reddrakes=$_POST['reddrakes'];
                                        $rednashes=$_POST['rednashes'];
                                        $redturret=$_POST['redturret'];
                                        $redinhib=$_POST['redinhib'];

                                        $sql = "INSERT INTO t_spiel_stats (ss_sp_id, ss_blue_kills, ss_blue_drakes, ss_blue_nashes, ss_blue_turrets, ss_blue_inhibs,
                                                ss_red_kills, ss_red_drakes, ss_red_nashes, ss_red_turrets, ss_red_inhibs ) VALUES ('$sp_id', '$bluekills', '$bluedrakes', '$bluenashes',
                                                '$blueturret', '$blueinhib', '$redkills', '$reddrakes', '$rednashes', '$redturret', '$redinhib')";
                                        
                                        $insert=mysqli_query($conn, $sql);

                                        if (!$insert)
                                        {
                                            echo "Fehlerhafte eingabe";
                                        }
                                        else
                                        {
                                            echo "Eingabe erfolgreich";
                                        }
                                    }
                                    
                            ?>